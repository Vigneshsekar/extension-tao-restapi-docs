<?php

return new \oat\taoRestApiDocs\model\service\docs\DocsService([
    \oat\taoRestApiDocs\model\service\docs\DocsService::OPTION_PROXY => \oat\taoRestApiDocs\model\proxy\format\Swagger2_0::class,
    \oat\taoRestApiDocs\model\service\docs\DocsService::OPTION_DOCS => \oat\taoRestApiDocs\helpers\RestDocHelper::getExtensionsDocsPaths()
]);
