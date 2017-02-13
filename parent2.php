<?php

namespace TypiCMS\Modules\Bussinessplans\Repositories;

use Dingo\Api\Auth\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use TypiCMS\Modules\Bussinessplans\Models\BusinessPlanModel;
use TypiCMS\Modules\Bussinessplans\Models\BussinessplanModel;
use TypiCMS\Modules\Bussinessplans\Models\MajorProduct;
use TypiCMS\Modules\Core\Repositories\RepositoriesAbstract;

Class EloquentBussinessplan extends RepositoriesAbstract implements BussinessplanInterface
{
	public function __construct(Model $model)
	{
		$this->model = $model;
	}

	public function setModel(Model $model)
	{
		$this->model = $model;
	}
}



