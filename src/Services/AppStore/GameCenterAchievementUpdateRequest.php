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

class GameCenterAchievementUpdateRequest_Data_Attributes extends \Mantix\AppStoreConnect\Model
{
	public $referenceName;
	public $points;
	public $showBeforeEarned;
	public $repeatable;
	public $archived;

	public function getReferenceName()
	{
		return $this->referenceName;
	}
	public function setReferenceName($referenceName)
	{
		$this->referenceName = $referenceName;
		return $this;
	}
	public function getPoints()
	{
		return $this->points;
	}
	public function setPoints($points)
	{
		$this->points = $points;
		return $this;
	}
	public function getShowBeforeEarned()
	{
		return $this->showBeforeEarned;
	}
	public function setShowBeforeEarned($showBeforeEarned)
	{
		$this->showBeforeEarned = $showBeforeEarned;
		return $this;
	}
	public function getRepeatable()
	{
		return $this->repeatable;
	}
	public function setRepeatable($repeatable)
	{
		$this->repeatable = $repeatable;
		return $this;
	}
	public function getArchived()
	{
		return $this->archived;
	}
	public function setArchived($archived)
	{
		$this->archived = $archived;
		return $this;
	}

}

class GameCenterAchievementUpdateRequest_Data extends \Mantix\AppStoreConnect\Model
{
	public $type = 'gameCenterAchievements';
	public $id;
	protected $attributesType = GameCenterAchievementUpdateRequest_Data_Attributes::class;
	protected $attributesDataType = 'object';

	public function getType()
	{
		return $this->type;
	}
	public function setType($type)
	{
		$this->type = $type;
		return $this;
	}
	public function getId()
	{
		return $this->id;
	}
	public function setId($id)
	{
		$this->id = $id;
		return $this;
	}
	/**
	* @return  GameCenterAchievementUpdateRequest_Data_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  GameCenterAchievementUpdateRequest_Data_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}

}

class GameCenterAchievementUpdateRequest extends \Mantix\AppStoreConnect\Model
{
	protected $dataType = GameCenterAchievementUpdateRequest_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  GameCenterAchievementUpdateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  GameCenterAchievementUpdateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

