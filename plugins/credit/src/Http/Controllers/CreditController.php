<?php

namespace Botble\Credit\Http\Controllers;

use Botble\Base\Events\BeforeEditContentEvent;
use Botble\Credit\Http\Requests\CreditRequest;
use Botble\Credit\Repositories\Interfaces\CreditInterface;
use Botble\Base\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use Exception;
use Botble\Credit\Tables\CreditTable;
use Botble\Base\Events\CreatedContentEvent;
use Botble\Base\Events\DeletedContentEvent;
use Botble\Base\Events\UpdatedContentEvent;
use Botble\Base\Http\Responses\BaseHttpResponse;
use Botble\Credit\Forms\CreditForm;
use Botble\Base\Forms\FormBuilder;

class CreditController extends BaseController
{
    /**
     * @var CreditInterface
     */
    protected $creditRepository;

    /**
     * CreditController constructor.
     * @param CreditInterface $creditRepository
     * @author Sang Nguyen
     */
    public function __construct(CreditInterface $creditRepository)
    {
        $this->creditRepository = $creditRepository;
    }

    /**
     * Display all credits
     * @param CreditTable $dataTable
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @author Sang Nguyen
     * @throws \Throwable
     */
    public function getList(CreditTable $table)
    {

        page_title()->setTitle(trans('plugins.credit::credit.name'));

        return $table->renderTable();
    }

    /**
     * @param FormBuilder $formBuilder
     * @return string
     * @author Sang Nguyen
     */
    public function getCreate(FormBuilder $formBuilder)
    {
        page_title()->setTitle(trans('plugins.credit::credit.create'));

        return $formBuilder->create(CreditForm::class)->renderForm();
    }

    /**
     * Insert new Credit into database
     *
     * @param CreditRequest $request
     * @return BaseHttpResponse
     * @author Sang Nguyen
     */
    public function postCreate(CreditRequest $request, BaseHttpResponse $response)
    {
        $credit = $this->creditRepository->createOrUpdate($request->input());

        event(new CreatedContentEvent(CREDIT_MODULE_SCREEN_NAME, $request, $credit));

        return $response
            ->setPreviousUrl(route('credit.list'))
            ->setNextUrl(route('credit.edit', $credit->id))
            ->setMessage(trans('core.base::notices.create_success_message'));
    }

    /**
     * Show edit form
     *
     * @param $id
     * @param Request $request
     * @param FormBuilder $formBuilder
     * @return string
     * @author Sang Nguyen
     */
    public function getEdit($id, FormBuilder $formBuilder, Request $request)
    {
        $credit = $this->creditRepository->findOrFail($id);

        event(new BeforeEditContentEvent(CREDIT_MODULE_SCREEN_NAME, $request, $credit));

        page_title()->setTitle(trans('plugins.credit::credit.edit') . ' #' . $id);

        return $formBuilder->create(CreditForm::class)->setModel($credit)->renderForm();
    }

    /**
     * @param $id
     * @param CreditRequest $request
     * @return BaseHttpResponse
     * @author Sang Nguyen
     */
    public function postEdit($id, CreditRequest $request, BaseHttpResponse $response)
    {
        $credit = $this->creditRepository->findOrFail($id);

        $credit->fill($request->input());

        $this->creditRepository->createOrUpdate($credit);

        event(new UpdatedContentEvent(CREDIT_MODULE_SCREEN_NAME, $request, $credit));

        return $response
            ->setPreviousUrl(route('credit.list'))
            ->setMessage(trans('core.base::notices.update_success_message'));
    }

    /**
     * @param $id
     * @param Request $request
     * @return BaseHttpResponse
     * @author Sang Nguyen
     */
    public function getDelete(Request $request, $id, BaseHttpResponse $response)
    {
        try {
            $credit = $this->creditRepository->findOrFail($id);

            $this->creditRepository->delete($credit);

            event(new DeletedContentEvent(CREDIT_MODULE_SCREEN_NAME, $request, $credit));

            return $response->setMessage(trans('core.base::notices.delete_success_message'));
        } catch (Exception $exception) {
            return $response
                ->setError()
                ->setMessage(trans('core.base::notices.cannot_delete'));
        }
    }

    /**
     * @param Request $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     * @author Sang Nguyen
     */
    public function postDeleteMany(Request $request, BaseHttpResponse $response)
    {
        $ids = $request->input('ids');
        if (empty($ids)) {
            return $response
                ->setError()
                ->setMessage(trans('core.base::notices.no_select'));
        }

        foreach ($ids as $id) {
            $credit = $this->creditRepository->findOrFail($id);
            $this->creditRepository->delete($credit);
            event(new DeletedContentEvent(CREDIT_MODULE_SCREEN_NAME, $request, $credit));
        }

        return $response->setMessage(trans('core.base::notices.delete_success_message'));
    }
}
