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

use Mantix\AppStoreConnect\Services\AppStore\BetaBuildLocalizationsResponse;
use Mantix\AppStoreConnect\Services\AppStore\BetaBuildLocalizationResponse;
use Mantix\AppStoreConnect\Services\AppStore\BetaBuildLocalizationCreateRequest;
use Mantix\AppStoreConnect\Services\AppStore\BetaBuildLocalizationUpdateRequest;
use Mantix\AppStoreConnect\Services\AppStore\BuildWithoutIncludesResponse;

/**
 * The "betaBuildLocalizations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $appStoreService = new Mantix\AppStoreConnect\Service\AppStore(...);
 *   $betaBuildLocalizations = $appStoreService->betaBuildLocalizations;
 *  </code>
 */
class BetaBuildLocalizations extends \Mantix\AppStoreConnect\Services\Resource
{

    /**
	 * @param array $optParams Optional parameters.
     * @return BetaBuildLocalizationsResponse
     */
    public function listBetaBuildLocalizations($optParams = [])
    {
		$params = [];
		$params = array_merge($params, $optParams);
        return $this->call('listBetaBuildLocalizations', [$params], BetaBuildLocalizationsResponse::class);
    }
    /**
	 * @param BetaBuildLocalizationCreateRequest $postBody
     * @return BetaBuildLocalizationResponse
     */
    public function createBetaBuildLocalizations(BetaBuildLocalizationCreateRequest $postBody)
    {
		$params = ['postBody' => $postBody];
        return $this->call('createBetaBuildLocalizations', [$params], BetaBuildLocalizationResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return BetaBuildLocalizationResponse
     */
    public function getBetaBuildLocalizations($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getBetaBuildLocalizations', [$params], BetaBuildLocalizationResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param BetaBuildLocalizationUpdateRequest $postBody
     * @return BetaBuildLocalizationResponse
     */
    public function updateBetaBuildLocalizations($id, BetaBuildLocalizationUpdateRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('updateBetaBuildLocalizations', [$params], BetaBuildLocalizationResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
     * @return null
     */
    public function deleteBetaBuildLocalizations($id)
    {
		$params = ['id' => $id];
        return $this->call('deleteBetaBuildLocalizations', [$params], null);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return BuildWithoutIncludesResponse
     */
    public function getBetaBuildLocalizationsBuild($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getBetaBuildLocalizationsBuild', [$params], BuildWithoutIncludesResponse::class);
    }
}

