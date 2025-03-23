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

namespace Mantix\AppStoreConnect\Services\AppStore\Resource;

use Mantix\AppStoreConnect\Services\AppStore\AppCustomProductPageVersionResponse;
use Mantix\AppStoreConnect\Services\AppStore\AppCustomProductPageVersionCreateRequest;
use Mantix\AppStoreConnect\Services\AppStore\AppCustomProductPageLocalizationsResponse;

/**
 * The "appCustomProductPageVersions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $appStoreService = new Mantix\AppStoreConnect\Service\AppStore(...);
 *   $appCustomProductPageVersions = $appStoreService->appCustomProductPageVersions;
 *  </code>
 */
class AppCustomProductPageVersions extends \Mantix\AppStoreConnect\Services\Resource
{

    /**
	 * @param AppCustomProductPageVersionCreateRequest $postBody
     * @return AppCustomProductPageVersionResponse
     */
    public function createAppCustomProductPageVersions(AppCustomProductPageVersionCreateRequest $postBody)
    {
		$params = ['postBody' => $postBody];
        return $this->call('createAppCustomProductPageVersions', [$params], AppCustomProductPageVersionResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return AppCustomProductPageVersionResponse
     */
    public function getAppCustomProductPageVersions($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getAppCustomProductPageVersions', [$params], AppCustomProductPageVersionResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return AppCustomProductPageLocalizationsResponse
     */
    public function listAppCustomProductPageVersionsAppCustomProductPageLocalizations($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listAppCustomProductPageVersionsAppCustomProductPageLocalizations', [$params], AppCustomProductPageLocalizationsResponse::class);
    }
}

