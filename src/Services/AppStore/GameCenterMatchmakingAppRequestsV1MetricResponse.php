<?php

/**
 * MIT License
 * 
 * Copyright (c) 2023 Long Pham
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
*/

namespace Mantix\AppStoreConnect\Services\AppStore;

class GameCenterMatchmakingAppRequestsV1MetricResponse_Data_DataPoints_Values extends \Mantix\AppStoreConnect\Model
{
	public $count;
	public $averageSecondsInQueue;
	public $p50SecondsInQueue;
	public $p95SecondsInQueue;

	public function getCount()
	{
		return $this->count;
	}
	public function setCount($count)
	{
		$this->count = $count;
		return $this;
	}
	public function getAverageSecondsInQueue()
	{
		return $this->averageSecondsInQueue;
	}
	public function setAverageSecondsInQueue($averageSecondsInQueue)
	{
		$this->averageSecondsInQueue = $averageSecondsInQueue;
		return $this;
	}
	public function getP50SecondsInQueue()
	{
		return $this->p50SecondsInQueue;
	}
	public function setP50SecondsInQueue($p50SecondsInQueue)
	{
		$this->p50SecondsInQueue = $p50SecondsInQueue;
		return $this;
	}
	public function getP95SecondsInQueue()
	{
		return $this->p95SecondsInQueue;
	}
	public function setP95SecondsInQueue($p95SecondsInQueue)
	{
		$this->p95SecondsInQueue = $p95SecondsInQueue;
		return $this;
	}

}

class GameCenterMatchmakingAppRequestsV1MetricResponse_Data_DataPoints extends \Mantix\AppStoreConnect\Model
{
	public $start;
	public $end;
	protected $valuesType = GameCenterMatchmakingAppRequestsV1MetricResponse_Data_DataPoints_Values::class;
	protected $valuesDataType = 'object';

	public function getStart()
	{
		return $this->start;
	}
	public function setStart($start)
	{
		$this->start = $start;
		return $this;
	}
	public function getEnd()
	{
		return $this->end;
	}
	public function setEnd($end)
	{
		$this->end = $end;
		return $this;
	}
	/**
	* @return  GameCenterMatchmakingAppRequestsV1MetricResponse_Data_DataPoints_Values
	*/
	public function getValues()
	{
		return $this->values;
	}
	/**
	* @param  GameCenterMatchmakingAppRequestsV1MetricResponse_Data_DataPoints_Values
	*/
	public function setValues($values)
	{
		$this->values = $values;
		return $this;
	}

}

class GameCenterMatchmakingAppRequestsV1MetricResponse_Data_Dimensions_Result_Links extends \Mantix\AppStoreConnect\Model
{
	public $groupBy;

	public function getGroupBy()
	{
		return $this->groupBy;
	}
	public function setGroupBy($groupBy)
	{
		$this->groupBy = $groupBy;
		return $this;
	}

}

class GameCenterMatchmakingAppRequestsV1MetricResponse_Data_Dimensions_Result extends \Mantix\AppStoreConnect\Model
{
	protected $linksType = GameCenterMatchmakingAppRequestsV1MetricResponse_Data_Dimensions_Result_Links::class;
	protected $linksDataType = 'object';

	/**
	* @return  GameCenterMatchmakingAppRequestsV1MetricResponse_Data_Dimensions_Result_Links
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  GameCenterMatchmakingAppRequestsV1MetricResponse_Data_Dimensions_Result_Links
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}

}

class GameCenterMatchmakingAppRequestsV1MetricResponse_Data_Dimensions extends \Mantix\AppStoreConnect\Model
{
	protected $resultType = GameCenterMatchmakingAppRequestsV1MetricResponse_Data_Dimensions_Result::class;
	protected $resultDataType = 'object';

	/**
	* @return  GameCenterMatchmakingAppRequestsV1MetricResponse_Data_Dimensions_Result
	*/
	public function getResult()
	{
		return $this->result;
	}
	/**
	* @param  GameCenterMatchmakingAppRequestsV1MetricResponse_Data_Dimensions_Result
	*/
	public function setResult($result)
	{
		$this->result = $result;
		return $this;
	}

}

class GameCenterMatchmakingAppRequestsV1MetricResponse_Data extends \Mantix\AppStoreConnect\Model
{
	protected $dataPointsType = GameCenterMatchmakingAppRequestsV1MetricResponse_Data_DataPoints::class;
	protected $dataPointsDataType = 'object';
	protected $dimensionsType = GameCenterMatchmakingAppRequestsV1MetricResponse_Data_Dimensions::class;
	protected $dimensionsDataType = 'object';
	public $granularity; // P1D, PT1H, PT15M

	/**
	* @return  GameCenterMatchmakingAppRequestsV1MetricResponse_Data_DataPoints
	*/
	public function getDataPoints()
	{
		return $this->dataPoints;
	}
	/**
	* @param  GameCenterMatchmakingAppRequestsV1MetricResponse_Data_DataPoints
	*/
	public function setDataPoints($dataPoints)
	{
		$this->dataPoints = $dataPoints;
		return $this;
	}
	/**
	* @return  GameCenterMatchmakingAppRequestsV1MetricResponse_Data_Dimensions
	*/
	public function getDimensions()
	{
		return $this->dimensions;
	}
	/**
	* @param  GameCenterMatchmakingAppRequestsV1MetricResponse_Data_Dimensions
	*/
	public function setDimensions($dimensions)
	{
		$this->dimensions = $dimensions;
		return $this;
	}
	public function getGranularity()
	{
		return $this->granularity;
	}
	public function setGranularity($granularity)
	{
		$this->granularity = $granularity;
		return $this;
	}

}

class GameCenterMatchmakingAppRequestsV1MetricResponse extends \Mantix\AppStoreConnect\Model
{
	protected $dataType = GameCenterMatchmakingAppRequestsV1MetricResponse_Data::class;
	protected $dataDataType = 'array';
	protected $linksType = PagedDocumentLinks::class;
	protected $linksDataType = '';
	protected $metaType = PagingInformation::class;
	protected $metaDataType = '';

	/**
	* @return  GameCenterMatchmakingAppRequestsV1MetricResponse_Data[]
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  GameCenterMatchmakingAppRequestsV1MetricResponse_Data[]
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}
	/**
	* @return  PagedDocumentLinks
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  PagedDocumentLinks
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}
	/**
	* @return  PagingInformation
	*/
	public function getMeta()
	{
		return $this->meta;
	}
	/**
	* @param  PagingInformation
	*/
	public function setMeta($meta)
	{
		$this->meta = $meta;
		return $this;
	}

}

