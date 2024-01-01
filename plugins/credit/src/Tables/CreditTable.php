<?php

namespace Botble\Credit\Tables;

use Botble\Credit\Repositories\Interfaces\CreditInterface;
use Botble\Table\Abstracts\TableAbstract;
use Illuminate\Contracts\Routing\UrlGenerator;
use Yajra\DataTables\DataTables;

class CreditTable extends TableAbstract
{

    /**
     * @var bool
     */
    protected $has_actions = true;

    /**
     * @var bool
     */
    protected $has_filter = true;

    /**
     * TagTable constructor.
     * @param DataTables $table
     * @param UrlGenerator $urlGenerator
     * @param CreditInterface $creditRepository
     */
    public function __construct(DataTables $table, UrlGenerator $urlGenerator, CreditInterface $creditRepository)
    {
        $this->repository = $creditRepository;
        $this->setOption('id', 'table-plugins-credit');
        parent::__construct($table, $urlGenerator);
    }

    /**
     * Display ajax response.
     *
     * @return \Illuminate\Http\JsonResponse
     * @author Sang Nguyen
     * @since 2.1
     */
    public function ajax()
    {
        $data = $this->table
            ->eloquent($this->query())
            ->editColumn('post_id', function ($item) {
                return anchor_link(route('credit.edit', $item->id), $item->post_id);
            })
            ->editColumn('checkbox', function ($item) {
                return table_checkbox($item->id);
            })
            ->editColumn('uang_muka', function ($item) {
                return number_format($item->uang_muka);
            })
            ->editColumn('created_at', function ($item) {
                return date_from_database($item->created_at, config('core.base.general.date_format.date'));
            });

        return apply_filters(BASE_FILTER_GET_LIST_DATA, $data, CREDIT_MODULE_SCREEN_NAME)
            ->addColumn('operations', function ($item) {
                return table_actions('credit.edit', 'credit.delete', $item);
            })
            ->escapeColumns([])
            ->make(true);
    }

    /**
     * Get the query object to be processed by table.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     * @author Sang Nguyen
     * @since 2.1
     */
    public function query()
    {
        $model = $this->repository->getModel();
        $query = $model->select(['credits.id', 'credits.uang_muka', 'credits.created_at', 'credits.post_id', 'credits.diskon']);
        return $this->applyScopes(apply_filters(BASE_FILTER_TABLE_QUERY, $query, $model, CREDIT_MODULE_SCREEN_NAME));
    }

    /**
     * @return array
     * @author Sang Nguyen
     * @since 2.1
     */
    public function columns()
    {
        return [
            'id' => [
                'name' => 'credits.id',
                'title' => trans('core.base::tables.id'),
                'width' => '20px',
            ],
            'post_id' => [
                'name' => 'credits.motor_id',
                'title' => 'Motor ID',
                'class' => 'text-left',
            ],
            'uang_muka' => [
                'name' => 'credits.uang_muka',
                'title' => 'Uang Muka',
                'width' => '100px',
            ],
            // 'diskon' => [
            //     'name' => 'credits.diskon',
            //     'title' => 'Diskon',
            //     'width' => '100px',
            // ],
        ];
    }

    /**
     * @return array
     * @author Sang Nguyen
     * @since 2.1
     * @throws \Throwable
     */
    public function buttons()
    {
        $buttons = [
            'create' => [
                'link' => route('credit.create'),
                'text' => view('core.base::elements.tables.actions.create')->render(),
            ],
            'import' => [
                'link' => 'https://salesmotorhonda.com/import-data-excel/',
                'text' => 'Import',
            ],
        ];
        return apply_filters(BASE_FILTER_TABLE_BUTTONS, $buttons, CREDIT_MODULE_SCREEN_NAME);
    }

    /**
     * @return array
     * @throws \Throwable
     */
    public function bulkActions(): array
    {
        $actions = parent::bulkActions();

        $actions['delete-many'] = view('core.table::partials.delete', [
            'href' => route('credit.delete.many'),
            'data_class' => get_class($this),
        ]);

        return $actions;
    }

    /**
     * @return mixed
     */
    public function getBulkChanges(): array
    {
        return [
            'credits.post_id' => [
                'title' => 'Motor ID',
                'type' => 'text',
            ],
            'credits.uang_muka' => [
                'title' => 'Uang Muka',
                'type' => 'text',
            ],
            'credits.created_at' => [
                'title' => trans('core.base::tables.created_at'),
                'type' => 'date',
            ],
        ];
    }

    /**
     * @return array
     */
    public function getNames()
    {
        return $this->repository->pluck('credits.post_id', 'credits.id');
    }
}
