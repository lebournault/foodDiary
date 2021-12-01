<?php
namespace Tests\Entity;
use App\Entity\Product;
use PHPUnit\Framework\TestCase;
class ProductTest extends TestCase
{
    /**
    * @dataProvider pricesForFoodProduct
    */
    public function testcomputeTVAFoodProduct($price, $expectedTva)
        {
        $product = new Product('Un produit', Product::FOOD_PRODUCT, $price);
        $this->assertSame($expectedTva, $product->computeTVA());
        }
    public function pricesForFoodProduct()
    {
        return [
            [0, 0.0],
            [20, 1.1],
            [100, 5.5]
            ];
    }
}