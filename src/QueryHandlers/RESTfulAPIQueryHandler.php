<?php

namespace colymba\RESTfulAPI\QueryHandlers;

use SilverStripe\Control\HTTPRequest;

/**
 * RESTfulAPI Query handlers definition
 *
 * @author  Thierry Francois @colymba thierry@colymba.com
 * @copyright Copyright (c) 2013, Thierry Francois
 *
 * @license http://opensource.org/licenses/BSD-3-Clause BSD Simplified
 *
 * @package RESTfulAPI
 * @subpackage QueryHandler
 */
interface RESTfulAPIQueryHandler
{

    /**
     * Return current RESTfulAPI DeSerializer instance
     *
     * @return RESTfulAPIDeSerializer DeSerializer instance
     */
    public function getdeSerializer();

    /**
     * All requests pass through here and are redirected depending on HTTP verb and params
     *
     * @param  HTTPRequest        $request    HTTP request
     * @return DataObjec|DataList                DataObjec/DataList result
     */
    public function handleQuery(HTTPRequest $request);
}
