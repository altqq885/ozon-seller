<?php

declare(strict_types=1);

namespace Gam6itko\OzonSeller\Service\V5\Posting;

use Gam6itko\OzonSeller\Service\AbstractService;

class ProductExemplarService extends AbstractService
{
    private $path = '/v5/fbs/posting/product/exemplar';

    /**
     * @see https://docs.ozon.ru/api/seller/#operation/PostingAPI_FbsPostingProductExemplarSet
     */
    public function set(string $postingNumber, array $products)
    {
        assert(!empty($products));

        $body = [
            'posting_number' => $postingNumber,
            'products'       => $products,
        ];

        return $this->request('POST', "{$this->path}/set", $body);
    }
}
