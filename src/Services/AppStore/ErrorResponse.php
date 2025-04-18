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

class ErrorResponse_Errors_Meta extends \Mantix\AppStoreConnect\Model
{
	// enum class


}

class ErrorResponse_Errors extends \Mantix\AppStoreConnect\Model
{
	public $id;
	public $status;
	public $code;
	public $title;
	public $detail;
	protected $sourceType = [ErrorSourcePointer::class, ErrorSourceParameter::class];
	protected $sourceDataType = '[*]';
	protected $metaType = ErrorResponse_Errors_Meta::class;
	protected $metaDataType = 'object';

	public function getId()
	{
		return $this->id;
	}
	public function setId($id)
	{
		$this->id = $id;
		return $this;
	}
	public function getStatus()
	{
		return $this->status;
	}
	public function setStatus($status)
	{
		$this->status = $status;
		return $this;
	}
	public function getCode()
	{
		return $this->code;
	}
	public function setCode($code)
	{
		$this->code = $code;
		return $this;
	}
	public function getTitle()
	{
		return $this->title;
	}
	public function setTitle($title)
	{
		$this->title = $title;
		return $this;
	}
	public function getDetail()
	{
		return $this->detail;
	}
	public function setDetail($detail)
	{
		$this->detail = $detail;
		return $this;
	}
	public function getSource()
	{
		return $this->source;
	}
	public function setSource($source)
	{
		$this->source = $source;
		return $this;
	}
	/**
	* @return  ErrorResponse_Errors_Meta
	*/
	public function getMeta()
	{
		return $this->meta;
	}
	/**
	* @param  ErrorResponse_Errors_Meta
	*/
	public function setMeta($meta)
	{
		$this->meta = $meta;
		return $this;
	}

}

class ErrorResponse extends \Mantix\AppStoreConnect\Model
{
	protected $errorsType = ErrorResponse_Errors::class;
	protected $errorsDataType = 'array';

	/**
	* @return  ErrorResponse_Errors[]
	*/
	public function getErrors()
	{
		return $this->errors;
	}
	/**
	* @param  ErrorResponse_Errors[]
	*/
	public function setErrors($errors)
	{
		$this->errors = $errors;
		return $this;
	}

}

