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

use Mantix\AppStoreConnect\Services\AppStore\BetaTestersResponse;
use Mantix\AppStoreConnect\Services\AppStore\BetaTesterResponse;
use Mantix\AppStoreConnect\Services\AppStore\BetaTesterCreateRequest;
use Mantix\AppStoreConnect\Services\AppStore\BetaTesterAppsLinkagesResponse;
use Mantix\AppStoreConnect\Services\AppStore\BetaTesterAppsLinkagesRequest;
use Mantix\AppStoreConnect\Services\AppStore\AppsWithoutIncludesResponse;
use Mantix\AppStoreConnect\Services\AppStore\BetaTesterBetaGroupsLinkagesResponse;
use Mantix\AppStoreConnect\Services\AppStore\BetaTesterBetaGroupsLinkagesRequest;
use Mantix\AppStoreConnect\Services\AppStore\BetaGroupsWithoutIncludesResponse;
use Mantix\AppStoreConnect\Services\AppStore\BetaTesterBuildsLinkagesResponse;
use Mantix\AppStoreConnect\Services\AppStore\BetaTesterBuildsLinkagesRequest;
use Mantix\AppStoreConnect\Services\AppStore\BuildsWithoutIncludesResponse;
use Mantix\AppStoreConnect\Services\AppStore\BetaTesterUsagesV1MetricResponse;

/**
 * The "betaTesters" collection of methods.
 * Typical usage is:
 *  <code>
 *   $appStoreService = new Mantix\AppStoreConnect\Service\AppStore(...);
 *   $betaTesters = $appStoreService->betaTesters;
 *  </code>
 */
class BetaTesters extends \Mantix\AppStoreConnect\Services\Resource
{

    /**
	 * @param array $optParams Optional parameters.
     * @return BetaTestersResponse
     */
    public function listBetaTesters($optParams = [])
    {
		$params = [];
		$params = array_merge($params, $optParams);
        return $this->call('listBetaTesters', [$params], BetaTestersResponse::class);
    }
    /**
	 * @param BetaTesterCreateRequest $postBody
     * @return BetaTesterResponse
     */
    public function createBetaTesters(BetaTesterCreateRequest $postBody)
    {
		$params = ['postBody' => $postBody];
        return $this->call('createBetaTesters', [$params], BetaTesterResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return BetaTesterResponse
     */
    public function getBetaTesters($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getBetaTesters', [$params], BetaTesterResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
     * @return null
     */
    public function deleteBetaTesters($id)
    {
		$params = ['id' => $id];
        return $this->call('deleteBetaTesters', [$params], null);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return BetaTesterAppsLinkagesResponse
     */
    public function listBetaTestersAppsLinkages($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listBetaTestersAppsLinkages', [$params], BetaTesterAppsLinkagesResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param BetaTesterAppsLinkagesRequest $postBody
     * @return null
     */
    public function deleteListBetaTestersApps($id, BetaTesterAppsLinkagesRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('deleteListBetaTestersApps', [$params], null);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return AppsWithoutIncludesResponse
     */
    public function listBetaTestersApps($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listBetaTestersApps', [$params], AppsWithoutIncludesResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return BetaTesterBetaGroupsLinkagesResponse
     */
    public function listBetaTestersBetaGroupsLinkages($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listBetaTestersBetaGroupsLinkages', [$params], BetaTesterBetaGroupsLinkagesResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param BetaTesterBetaGroupsLinkagesRequest $postBody
     * @return null
     */
    public function createListBetaTestersBetaGroups($id, BetaTesterBetaGroupsLinkagesRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('createListBetaTestersBetaGroups', [$params], null);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param BetaTesterBetaGroupsLinkagesRequest $postBody
     * @return null
     */
    public function deleteListBetaTestersBetaGroups($id, BetaTesterBetaGroupsLinkagesRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('deleteListBetaTestersBetaGroups', [$params], null);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return BetaGroupsWithoutIncludesResponse
     */
    public function listBetaTestersBetaGroups($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listBetaTestersBetaGroups', [$params], BetaGroupsWithoutIncludesResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return BetaTesterBuildsLinkagesResponse
     */
    public function listBetaTestersBuildsLinkages($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listBetaTestersBuildsLinkages', [$params], BetaTesterBuildsLinkagesResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param BetaTesterBuildsLinkagesRequest $postBody
     * @return null
     */
    public function createListBetaTestersBuilds($id, BetaTesterBuildsLinkagesRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('createListBetaTestersBuilds', [$params], null);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param BetaTesterBuildsLinkagesRequest $postBody
     * @return null
     */
    public function deleteListBetaTestersBuilds($id, BetaTesterBuildsLinkagesRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('deleteListBetaTestersBuilds', [$params], null);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return BuildsWithoutIncludesResponse
     */
    public function listBetaTestersBuilds($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listBetaTestersBuilds', [$params], BuildsWithoutIncludesResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return BetaTesterUsagesV1MetricResponse
     */
    public function getBetaTestersBetaTesterUsagesMetrics($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getBetaTestersBetaTesterUsagesMetrics', [$params], BetaTesterUsagesV1MetricResponse::class);
    }
}

