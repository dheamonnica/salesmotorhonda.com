<?php

namespace Botble\Banner\Http\Controllers;

use Botble\Base\Events\BeforeEditContentEvent;
use Botble\Banner\Http\Requests\BannerRequest;
use Botble\Banner\Repositories\Interfaces\BannerInterface;
use Botble\Base\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use Exception;
use Botble\Banner\Tables\BannerTable;
use Botble\Base\Events\CreatedContentEvent;
use Botble\Base\Events\DeletedContentEvent;
use Botble\Base\Events\UpdatedContentEvent;
use Botble\Base\Http\Responses\BaseHttpResponse;
use Botble\Banner\Forms\BannerForm;
use Botble\Base\Forms\FormBuilder;

class BannerController extends BaseController
{
    /**
     * @var BannerInterface
     */
    protected $bannerRepository;

    /**
     * BannerController constructor.
     * @param BannerInterface $bannerRepository
     * @author Sang Nguyen
     */
    public function __construct(BannerInterface $bannerRepository)
    {
        $this->bannerRepository = $bannerRepository;
    }

    /**
     * Display all banners
     * @param BannerTable $dataTable
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @author Sang Nguyen
     * @throws \Throwable
     */
    public function getList(BannerTable $table)
    {

        page_title()->setTitle(trans('plugins.banner::banner.name'));

        return $table->renderTable();
    }

    /**
     * @param FormBuilder $formBuilder
     * @return string
     * @author Sang Nguyen
     */
    public function getCreate(FormBuilder $formBuilder)
    {
        page_title()->setTitle(trans('plugins.banner::banner.create'));

        return $formBuilder->create(BannerForm::class)->renderForm();
    }

    /**
     * Insert new Banner into database
     *
     * @param BannerRequest $request
     * @return BaseHttpResponse
     * @author Sang Nguyen
     */
    public function postCreate(BannerRequest $request, BaseHttpResponse $response)
    {
        $banner = $this->bannerRepository->createOrUpdate($request->input());

        event(new CreatedContentEvent(BANNER_MODULE_SCREEN_NAME, $request, $banner));

        return $response
            ->setPreviousUrl(route('banner.list'))
            ->setNextUrl(route('banner.edit', $banner->id))
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
        $banner = $this->bannerRepository->findOrFail($id);

        event(new BeforeEditContentEvent(BANNER_MODULE_SCREEN_NAME, $request, $banner));

        page_title()->setTitle(trans('plugins.banner::banner.edit') . ' #' . $id);

        return $formBuilder->create(BannerForm::class)->setModel($banner)->renderForm();
    }

    /**
     * @param $id
     * @param BannerRequest $request
     * @return BaseHttpResponse
     * @author Sang Nguyen
     */
    public function postEdit($id, BannerRequest $request, BaseHttpResponse $response)
    {
        $banner = $this->bannerRepository->findOrFail($id);

        $banner->fill($request->input());

        $this->bannerRepository->createOrUpdate($banner);

        event(new UpdatedContentEvent(BANNER_MODULE_SCREEN_NAME, $request, $banner));

        return $response
            ->setPreviousUrl(route('banner.list'))
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
            $banner = $this->bannerRepository->findOrFail($id);

            $this->bannerRepository->delete($banner);

            event(new DeletedContentEvent(BANNER_MODULE_SCREEN_NAME, $request, $banner));

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
            $banner = $this->bannerRepository->findOrFail($id);
            $this->bannerRepository->delete($banner);
            event(new DeletedContentEvent(BANNER_MODULE_SCREEN_NAME, $request, $banner));
        }

        return $response->setMessage(trans('core.base::notices.delete_success_message'));
    }
}
