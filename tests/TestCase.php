<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    /**
     * response success package
     */
    public function responsePackage()
    {
        $response = [
            [
                'id' => "",
                'transaction_id' => "",
                'customer_name' => "",
                'customer_code' => "",
                'transaction_amount' => "",
                'transaction_discount' => "",
                'transaction_additional_field' => "",
                'transaction_payment_type' => "",
                'transaction_state' => "",
                'transaction_code' => "",
                'transaction_order' => "",
                'location_id' => "",
                'organization_id' => "",
                'created_at' => "",
                'updated_at' => "",
                'transaction_payment_type_name' => "",
                'transaction_cash_amount' => "",
                'transaction_cash_change' => "",
                'customer_attribute' => [
                    'Nama_Sales' => "",
                    'TOP' => "",
                    'Jenis_Pelanggan'
                ],
                'connote' => [
                    'connote_id' => "",
                    'connote_number' => "",
                    'connote_service' => "",
                    'connote_service_price' => "",
                    'connote_amount' => "",
                    'connote_code' => "",
                    'connote_booking_code' => "",
                    'connote_order' => "",
                    'connote_state' => "",
                    'connote_state_id' => "",
                    'zone_code_from' => "",
                    'zone_code_to' => "",
                    'surcharge_amount' => "",
                    'transaction_id' => "",
                    'actual_weight' => "",
                    'volume_weight' => "",
                    'chargeable_weight' => "",
                    'created_at' => "",
                    'updated_at' => "",
                    'organization_id' => "",
                    'location_id' => "",
                    'connote_total_package' => "",
                    'connote_surcharge_amount' => "",
                    'connote_sla_day' => "",
                    'location_name' => "",
                    'location_type' => "",
                    'source_tariff_db' => "",
                    'id_source_tariff' => "",
                    'pod' => "",
                    'history' => [],
                ],
                'connote_id' => "",
                'origin_data' => [
                    'customer_name' => "",
                    'customer_address' => "",
                    'customer_email' => "",
                    'customer_phone' => "",
                    'customer_address_detail' => "",
                    'customer_zip_code' => "",
                    'zone_code' => "",
                    'organization_id' => "",
                    'location_id'
                ],
                'destination_data' => [
                    'customer_name' => "",
                    'customer_address' => "",
                    'customer_email' => "",
                    'customer_phone' => "",
                    'customer_address_detail' => "",
                    'customer_zip_code' => "",
                    'zone_code' => "",
                    'organization_id' => "",
                    'location_id'
                ],
                'koli_data' => [
                    [
                        'koli_length' => "",
                        'awb_url' => "",
                        'created_at' => "",
                        'koli_chargeable_weight' => "",
                        'koli_width' => "",
                        'koli_surcharge' => "",
                        'koli_height' => "",
                        'updated_at' => "",
                        'koli_description' => "",
                        'koli_formula_id' => "",
                        'connote_id' => "",
                        'koli_volume' => "",
                        'koli_weight' => "",
                        'koli_id' => "",
                        'koli_custom_field' => [
                            'awb_sicepat' => "",
                            'harga_barang'
                        ],
                        'koli_code'
                    ]
                ],
            ]
        ];
        return $response;
    }

    /**
     * response success package
     */
    public function responsePackageDetail()
    {
        $response = [
            'transaction_id' => "",
            'customer_name' => "",
            'customer_code' => "",
            'transaction_amount' => "",
            'transaction_discount' => "",
            'transaction_additional_field' => "",
            'transaction_payment_type' => "",
            'transaction_state' => "",
            'transaction_code' => "",
            'transaction_order' => "",
            'location_id' => "",
            'organization_id' => "",
            'created_at' => "",
            'updated_at' => "",
            'transaction_payment_type_name' => "",
            'transaction_cash_amount' => "",
            'transaction_cash_change' => "",
            'customer_attribute' => [
                'Nama_Sales' => "",
                'TOP' => "",
                'Jenis_Pelanggan'
            ],
            'connote' => [
                'connote_id' => "",
                'connote_number' => "",
                'connote_service' => "",
                'connote_service_price' => "",
                'connote_amount' => "",
                'connote_code' => "",
                'connote_booking_code' => "",
                'connote_order' => "",
                'connote_state' => "",
                'connote_state_id' => "",
                'zone_code_from' => "",
                'zone_code_to' => "",
                'surcharge_amount' => "",
                'transaction_id' => "",
                'actual_weight' => "",
                'volume_weight' => "",
                'chargeable_weight' => "",
                'created_at' => "",
                'updated_at' => "",
                'organization_id' => "",
                'location_id' => "",
                'connote_total_package' => "",
                'connote_surcharge_amount' => "",
                'connote_sla_day' => "",
                'location_name' => "",
                'location_type' => "",
                'source_tariff_db' => "",
                'id_source_tariff' => "",
                'pod' => "",
                'history' => [],
            ],
            'connote_id' => "",
            'origin_data' => [
                'customer_name' => "",
                'customer_address' => "",
                'customer_email' => "",
                'customer_phone' => "",
                'customer_address_detail' => "",
                'customer_zip_code' => "",
                'zone_code' => "",
                'organization_id' => "",
                'location_id'
            ],
            'destination_data' => [
                'customer_name' => "",
                'customer_address' => "",
                'customer_email' => "",
                'customer_phone' => "",
                'customer_address_detail' => "",
                'customer_zip_code' => "",
                'zone_code' => "",
                'organization_id' => "",
                'location_id'
            ],
            'koli_data' => [
                [
                    'koli_length' => "",
                    'awb_url' => "",
                    'created_at' => "",
                    'koli_chargeable_weight' => "",
                    'koli_width' => "",
                    'koli_surcharge' => "",
                    'koli_height' => "",
                    'updated_at' => "",
                    'koli_description' => "",
                    'koli_formula_id' => "",
                    'connote_id' => "",
                    'koli_volume' => "",
                    'koli_weight' => "",
                    'koli_id' => "",
                    'koli_custom_field' => [
                        'awb_sicepat' => "",
                        'harga_barang'
                    ],
                    'koli_code'
                ]
            ],
        ];
        return $response;
    }


    /**
     * param add package
     */
    public function paramAddPackage()
    {
        $params = [
            'transaction_id' => "",
            'customer_name' => "",
            'customer_code' => "",
            'transaction_amount' => 0,
            'transaction_discount' => 0,
            'transaction_additional_field' => "",
            'transaction_payment_type' => "",
            'transaction_state' => "PAID",
            'transaction_code' => "",
            'transaction_order' => "",
            'location_id' => "",
            'organization_id' => "",
            'created_at' => "",
            'updated_at' => "",
            'transaction_payment_type_name' => "",
            'transaction_cash_amount' => "",
            'transaction_cash_change' => "",
            'customer_attribute' => [
                'Nama_Sales' => "",
                'TOP' => "",
                'Jenis_Pelanggan' => ""
            ],
            'connote' => [
                'connote_id' => "",
                'connote_number' => "",
                'connote_service' => "",
                'connote_service_price' => "",
                'connote_amount' => "",
                'connote_code' => "",
                'connote_booking_code' => "",
                'connote_order' => "",
                'connote_state' => "",
                'connote_state_id' => "",
                'zone_code_from' => "",
                'zone_code_to' => "",
                'surcharge_amount' => "",
                'transaction_id' => "",
                'actual_weight' => "",
                'volume_weight' => "",
                'chargeable_weight' => "",
                'created_at' => "",
                'updated_at' => "",
                'organization_id' => "",
                'location_id' => "",
                'connote_total_package' => "",
                'connote_surcharge_amount' => "",
                'connote_sla_day' => "",
                'location_name' => "",
                'location_type' => "",
                'source_tariff_db' => "",
                'id_source_tariff' => "",
                'pod' => "",
                'history' => [],
            ],
            'connote_id' => "",
            'origin_data' => [
                'customer_name' => "",
                'customer_address' => "",
                'customer_email' => "",
                'customer_phone' => "",
                'customer_address_detail' => "",
                'customer_zip_code' => "",
                'zone_code' => "",
                'organization_id' => "",
                'location_id'
            ],
            'destination_data' => [
                'customer_name' => "",
                'customer_address' => "",
                'customer_email' => "",
                'customer_phone' => "",
                'customer_address_detail' => "",
                'customer_zip_code' => "",
                'zone_code' => "",
                'organization_id' => "",
                'location_id'
            ],
            'koli_data' => [
                [
                    'koli_length' => "",
                    'awb_url' => "",
                    'created_at' => "",
                    'koli_chargeable_weight' => "",
                    'koli_width' => "",
                    'koli_surcharge' => "",
                    'koli_height' => "",
                    'updated_at' => "",
                    'koli_description' => "",
                    'koli_formula_id' => "",
                    'connote_id' => "",
                    'koli_volume' => "",
                    'koli_weight' => "",
                    'koli_id' => "",
                    'koli_custom_field' => [
                        'awb_sicepat' => "",
                        'harga_barang'
                    ],
                    'koli_code'
                ]
            ],
        ];
        return $params;
    }
}
