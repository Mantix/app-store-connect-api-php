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

class CustomerReviewResponseV1CreateRequest_Data_Attributes extends \Mantix\AppStoreConnect\Model
{
	public $responseBody;

	public function getResponseBody()
	{
		return $this->responseBody;
	}
	public function setResponseBody($responseBody)
	{
		$this->responseBody = $responseBody;
		return $this;
	}

}

class CustomerReviewResponseV1CreateRequest_Data_Relationships_Review_Data extends \Mantix\AppStoreConnect\Model
{
	public $type = 'customerReviews';
	public $id;

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

}

class CustomerReviewResponseV1CreateRequest_Data_Relationships_Review extends \Mantix\AppStoreConnect\Model
{
	protected $dataType = CustomerReviewResponseV1CreateRequest_Data_Relationships_Review_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  CustomerReviewResponseV1CreateRequest_Data_Relationships_Review_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  CustomerReviewResponseV1CreateRequest_Data_Relationships_Review_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

class CustomerReviewResponseV1CreateRequest_Data_Relationships extends \Mantix\AppStoreConnect\Model
{
	protected $reviewType = CustomerReviewResponseV1CreateRequest_Data_Relationships_Review::class;
	protected $reviewDataType = 'object';

	/**
	* @return  CustomerReviewResponseV1CreateRequest_Data_Relationships_Review
	*/
	public function getReview()
	{
		return $this->review;
	}
	/**
	* @param  CustomerReviewResponseV1CreateRequest_Data_Relationships_Review
	*/
	public function setReview($review)
	{
		$this->review = $review;
		return $this;
	}

}

class CustomerReviewResponseV1CreateRequest_Data extends \Mantix\AppStoreConnect\Model
{
	public $type = 'customerReviewResponses';
	protected $attributesType = CustomerReviewResponseV1CreateRequest_Data_Attributes::class;
	protected $attributesDataType = 'object';
	protected $relationshipsType = CustomerReviewResponseV1CreateRequest_Data_Relationships::class;
	protected $relationshipsDataType = 'object';

	public function getType()
	{
		return $this->type;
	}
	public function setType($type)
	{
		$this->type = $type;
		return $this;
	}
	/**
	* @return  CustomerReviewResponseV1CreateRequest_Data_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  CustomerReviewResponseV1CreateRequest_Data_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  CustomerReviewResponseV1CreateRequest_Data_Relationships
	*/
	public function getRelationships()
	{
		return $this->relationships;
	}
	/**
	* @param  CustomerReviewResponseV1CreateRequest_Data_Relationships
	*/
	public function setRelationships($relationships)
	{
		$this->relationships = $relationships;
		return $this;
	}

}

class CustomerReviewResponseV1CreateRequest extends \Mantix\AppStoreConnect\Model
{
	protected $dataType = CustomerReviewResponseV1CreateRequest_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  CustomerReviewResponseV1CreateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  CustomerReviewResponseV1CreateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}

