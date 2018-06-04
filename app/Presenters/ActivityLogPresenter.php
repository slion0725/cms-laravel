<?php

namespace App\Presenters;

use App\Transformers\ActivityLogTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class ActivityLogPresenter.
 *
 * @package namespace App\Presenters;
 */
class ActivityLogPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new ActivityLogTransformer();
    }
}
