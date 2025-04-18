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

class SubscriptionOfferDuration extends \Mantix\AppStoreConnect\Model
{
	// enum class
	public static $ONE_DAY = "ONE_DAY";
	public static $THREE_DAYS = "THREE_DAYS";
	public static $ONE_WEEK = "ONE_WEEK";
	public static $TWO_WEEKS = "TWO_WEEKS";
	public static $ONE_MONTH = "ONE_MONTH";
	public static $TWO_MONTHS = "TWO_MONTHS";
	public static $THREE_MONTHS = "THREE_MONTHS";
	public static $SIX_MONTHS = "SIX_MONTHS";
	public static $ONE_YEAR = "ONE_YEAR";


}

