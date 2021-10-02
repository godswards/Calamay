<?php

namespace App\Repositories;

use App\Models\Products;
use App\Repositories\BaseRepository;

/**
 * Class ProductsRepository
 * @package App\Repositories
 * @version October 2, 2021, 1:58 pm UTC
*/

class ProductsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Product_name',
        'Product_brand',
        'Price',
        'Description'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Products::class;
    }
}
