<?php

/**
 * A helper file for Dcat Admin, to provide autocomplete information to your IDE
 *
 * This file should not be included in your code, only analyzed by your IDE!
 *
 * @author jqh <841324345@qq.com>
 */
namespace Dcat\Admin {
    use Illuminate\Support\Collection;

    /**
     * @property Grid\Column|Collection state
     * @property Grid\Column|Collection id
     * @property Grid\Column|Collection name
     * @property Grid\Column|Collection type
     * @property Grid\Column|Collection version
     * @property Grid\Column|Collection detail
     * @property Grid\Column|Collection created_at
     * @property Grid\Column|Collection updated_at
     * @property Grid\Column|Collection is_enabled
     * @property Grid\Column|Collection parent_id
     * @property Grid\Column|Collection order
     * @property Grid\Column|Collection icon
     * @property Grid\Column|Collection uri
     * @property Grid\Column|Collection extension
     * @property Grid\Column|Collection permission_id
     * @property Grid\Column|Collection menu_id
     * @property Grid\Column|Collection slug
     * @property Grid\Column|Collection http_method
     * @property Grid\Column|Collection http_path
     * @property Grid\Column|Collection role_id
     * @property Grid\Column|Collection user_id
     * @property Grid\Column|Collection value
     * @property Grid\Column|Collection username
     * @property Grid\Column|Collection password
     * @property Grid\Column|Collection avatar
     * @property Grid\Column|Collection remember_token
     * @property Grid\Column|Collection phone
     * @property Grid\Column|Collection money
     * @property Grid\Column|Collection status
     * @property Grid\Column|Collection land_area
     * @property Grid\Column|Collection usable_area
     * @property Grid\Column|Collection horizontal
     * @property Grid\Column|Collection longs
     * @property Grid\Column|Collection price
     * @property Grid\Column|Collection number_of_bedrooms
     * @property Grid\Column|Collection number_of_restrooms
     * @property Grid\Column|Collection legal_documents
     * @property Grid\Column|Collection main_door_direction
     * @property Grid\Column|Collection balcony_direction
     * @property Grid\Column|Collection Interior_condition
     * @property Grid\Column|Collection highlights
     * @property Grid\Column|Collection post_id
     * @property Grid\Column|Collection district_id
     * @property Grid\Column|Collection province_id
     * @property Grid\Column|Collection uuid
     * @property Grid\Column|Collection connection
     * @property Grid\Column|Collection queue
     * @property Grid\Column|Collection payload
     * @property Grid\Column|Collection exception
     * @property Grid\Column|Collection failed_at
     * @property Grid\Column|Collection bank_id
     * @property Grid\Column|Collection banker
     * @property Grid\Column|Collection bank_name
     * @property Grid\Column|Collection category
     * @property Grid\Column|Collection province
     * @property Grid\Column|Collection district
     * @property Grid\Column|Collection ward
     * @property Grid\Column|Collection id_projectbds
     * @property Grid\Column|Collection address
     * @property Grid\Column|Collection status_address
     * @property Grid\Column|Collection floors_number
     * @property Grid\Column|Collection email
     * @property Grid\Column|Collection token
     * @property Grid\Column|Collection body
     * @property Grid\Column|Collection time_end
     * @property Grid\Column|Collection status_payment
     * @property Grid\Column|Collection image
     * @property Grid\Column|Collection deleted_at
     * @property Grid\Column|Collection id_province
     * @property Grid\Column|Collection id_district
     * @property Grid\Column|Collection id_ward
     * @property Grid\Column|Collection task_id
     * @property Grid\Column|Collection duration
     * @property Grid\Column|Collection content
     * @property Grid\Column|Collection command
     * @property Grid\Column|Collection parameters
     * @property Grid\Column|Collection expression
     * @property Grid\Column|Collection dont_overlap
     * @property Grid\Column|Collection run_in_maintenance
     * @property Grid\Column|Collection notification_email_address
     * @property Grid\Column|Collection email_verified_at
     * @property Grid\Column|Collection wards_id
     *
     * @method Grid\Column|Collection state(string $label = null)
     * @method Grid\Column|Collection id(string $label = null)
     * @method Grid\Column|Collection name(string $label = null)
     * @method Grid\Column|Collection type(string $label = null)
     * @method Grid\Column|Collection version(string $label = null)
     * @method Grid\Column|Collection detail(string $label = null)
     * @method Grid\Column|Collection created_at(string $label = null)
     * @method Grid\Column|Collection updated_at(string $label = null)
     * @method Grid\Column|Collection is_enabled(string $label = null)
     * @method Grid\Column|Collection parent_id(string $label = null)
     * @method Grid\Column|Collection order(string $label = null)
     * @method Grid\Column|Collection icon(string $label = null)
     * @method Grid\Column|Collection uri(string $label = null)
     * @method Grid\Column|Collection extension(string $label = null)
     * @method Grid\Column|Collection permission_id(string $label = null)
     * @method Grid\Column|Collection menu_id(string $label = null)
     * @method Grid\Column|Collection slug(string $label = null)
     * @method Grid\Column|Collection http_method(string $label = null)
     * @method Grid\Column|Collection http_path(string $label = null)
     * @method Grid\Column|Collection role_id(string $label = null)
     * @method Grid\Column|Collection user_id(string $label = null)
     * @method Grid\Column|Collection value(string $label = null)
     * @method Grid\Column|Collection username(string $label = null)
     * @method Grid\Column|Collection password(string $label = null)
     * @method Grid\Column|Collection avatar(string $label = null)
     * @method Grid\Column|Collection remember_token(string $label = null)
     * @method Grid\Column|Collection phone(string $label = null)
     * @method Grid\Column|Collection money(string $label = null)
     * @method Grid\Column|Collection status(string $label = null)
     * @method Grid\Column|Collection land_area(string $label = null)
     * @method Grid\Column|Collection usable_area(string $label = null)
     * @method Grid\Column|Collection horizontal(string $label = null)
     * @method Grid\Column|Collection longs(string $label = null)
     * @method Grid\Column|Collection price(string $label = null)
     * @method Grid\Column|Collection number_of_bedrooms(string $label = null)
     * @method Grid\Column|Collection number_of_restrooms(string $label = null)
     * @method Grid\Column|Collection legal_documents(string $label = null)
     * @method Grid\Column|Collection main_door_direction(string $label = null)
     * @method Grid\Column|Collection balcony_direction(string $label = null)
     * @method Grid\Column|Collection Interior_condition(string $label = null)
     * @method Grid\Column|Collection highlights(string $label = null)
     * @method Grid\Column|Collection post_id(string $label = null)
     * @method Grid\Column|Collection district_id(string $label = null)
     * @method Grid\Column|Collection province_id(string $label = null)
     * @method Grid\Column|Collection uuid(string $label = null)
     * @method Grid\Column|Collection connection(string $label = null)
     * @method Grid\Column|Collection queue(string $label = null)
     * @method Grid\Column|Collection payload(string $label = null)
     * @method Grid\Column|Collection exception(string $label = null)
     * @method Grid\Column|Collection failed_at(string $label = null)
     * @method Grid\Column|Collection bank_id(string $label = null)
     * @method Grid\Column|Collection banker(string $label = null)
     * @method Grid\Column|Collection bank_name(string $label = null)
     * @method Grid\Column|Collection category(string $label = null)
     * @method Grid\Column|Collection province(string $label = null)
     * @method Grid\Column|Collection district(string $label = null)
     * @method Grid\Column|Collection ward(string $label = null)
     * @method Grid\Column|Collection id_projectbds(string $label = null)
     * @method Grid\Column|Collection address(string $label = null)
     * @method Grid\Column|Collection status_address(string $label = null)
     * @method Grid\Column|Collection floors_number(string $label = null)
     * @method Grid\Column|Collection email(string $label = null)
     * @method Grid\Column|Collection token(string $label = null)
     * @method Grid\Column|Collection body(string $label = null)
     * @method Grid\Column|Collection time_end(string $label = null)
     * @method Grid\Column|Collection status_payment(string $label = null)
     * @method Grid\Column|Collection image(string $label = null)
     * @method Grid\Column|Collection deleted_at(string $label = null)
     * @method Grid\Column|Collection id_province(string $label = null)
     * @method Grid\Column|Collection id_district(string $label = null)
     * @method Grid\Column|Collection id_ward(string $label = null)
     * @method Grid\Column|Collection task_id(string $label = null)
     * @method Grid\Column|Collection duration(string $label = null)
     * @method Grid\Column|Collection content(string $label = null)
     * @method Grid\Column|Collection command(string $label = null)
     * @method Grid\Column|Collection parameters(string $label = null)
     * @method Grid\Column|Collection expression(string $label = null)
     * @method Grid\Column|Collection dont_overlap(string $label = null)
     * @method Grid\Column|Collection run_in_maintenance(string $label = null)
     * @method Grid\Column|Collection notification_email_address(string $label = null)
     * @method Grid\Column|Collection email_verified_at(string $label = null)
     * @method Grid\Column|Collection wards_id(string $label = null)
     */
    class Grid {}

    class MiniGrid extends Grid {}

    /**
     * @property Show\Field|Collection state
     * @property Show\Field|Collection id
     * @property Show\Field|Collection name
     * @property Show\Field|Collection type
     * @property Show\Field|Collection version
     * @property Show\Field|Collection detail
     * @property Show\Field|Collection created_at
     * @property Show\Field|Collection updated_at
     * @property Show\Field|Collection is_enabled
     * @property Show\Field|Collection parent_id
     * @property Show\Field|Collection order
     * @property Show\Field|Collection icon
     * @property Show\Field|Collection uri
     * @property Show\Field|Collection extension
     * @property Show\Field|Collection permission_id
     * @property Show\Field|Collection menu_id
     * @property Show\Field|Collection slug
     * @property Show\Field|Collection http_method
     * @property Show\Field|Collection http_path
     * @property Show\Field|Collection role_id
     * @property Show\Field|Collection user_id
     * @property Show\Field|Collection value
     * @property Show\Field|Collection username
     * @property Show\Field|Collection password
     * @property Show\Field|Collection avatar
     * @property Show\Field|Collection remember_token
     * @property Show\Field|Collection phone
     * @property Show\Field|Collection money
     * @property Show\Field|Collection status
     * @property Show\Field|Collection land_area
     * @property Show\Field|Collection usable_area
     * @property Show\Field|Collection horizontal
     * @property Show\Field|Collection longs
     * @property Show\Field|Collection price
     * @property Show\Field|Collection number_of_bedrooms
     * @property Show\Field|Collection number_of_restrooms
     * @property Show\Field|Collection legal_documents
     * @property Show\Field|Collection main_door_direction
     * @property Show\Field|Collection balcony_direction
     * @property Show\Field|Collection Interior_condition
     * @property Show\Field|Collection highlights
     * @property Show\Field|Collection post_id
     * @property Show\Field|Collection district_id
     * @property Show\Field|Collection province_id
     * @property Show\Field|Collection uuid
     * @property Show\Field|Collection connection
     * @property Show\Field|Collection queue
     * @property Show\Field|Collection payload
     * @property Show\Field|Collection exception
     * @property Show\Field|Collection failed_at
     * @property Show\Field|Collection bank_id
     * @property Show\Field|Collection banker
     * @property Show\Field|Collection bank_name
     * @property Show\Field|Collection category
     * @property Show\Field|Collection province
     * @property Show\Field|Collection district
     * @property Show\Field|Collection ward
     * @property Show\Field|Collection id_projectbds
     * @property Show\Field|Collection address
     * @property Show\Field|Collection status_address
     * @property Show\Field|Collection floors_number
     * @property Show\Field|Collection email
     * @property Show\Field|Collection token
     * @property Show\Field|Collection body
     * @property Show\Field|Collection time_end
     * @property Show\Field|Collection status_payment
     * @property Show\Field|Collection image
     * @property Show\Field|Collection deleted_at
     * @property Show\Field|Collection id_province
     * @property Show\Field|Collection id_district
     * @property Show\Field|Collection id_ward
     * @property Show\Field|Collection task_id
     * @property Show\Field|Collection duration
     * @property Show\Field|Collection content
     * @property Show\Field|Collection command
     * @property Show\Field|Collection parameters
     * @property Show\Field|Collection expression
     * @property Show\Field|Collection dont_overlap
     * @property Show\Field|Collection run_in_maintenance
     * @property Show\Field|Collection notification_email_address
     * @property Show\Field|Collection email_verified_at
     * @property Show\Field|Collection wards_id
     *
     * @method Show\Field|Collection state(string $label = null)
     * @method Show\Field|Collection id(string $label = null)
     * @method Show\Field|Collection name(string $label = null)
     * @method Show\Field|Collection type(string $label = null)
     * @method Show\Field|Collection version(string $label = null)
     * @method Show\Field|Collection detail(string $label = null)
     * @method Show\Field|Collection created_at(string $label = null)
     * @method Show\Field|Collection updated_at(string $label = null)
     * @method Show\Field|Collection is_enabled(string $label = null)
     * @method Show\Field|Collection parent_id(string $label = null)
     * @method Show\Field|Collection order(string $label = null)
     * @method Show\Field|Collection icon(string $label = null)
     * @method Show\Field|Collection uri(string $label = null)
     * @method Show\Field|Collection extension(string $label = null)
     * @method Show\Field|Collection permission_id(string $label = null)
     * @method Show\Field|Collection menu_id(string $label = null)
     * @method Show\Field|Collection slug(string $label = null)
     * @method Show\Field|Collection http_method(string $label = null)
     * @method Show\Field|Collection http_path(string $label = null)
     * @method Show\Field|Collection role_id(string $label = null)
     * @method Show\Field|Collection user_id(string $label = null)
     * @method Show\Field|Collection value(string $label = null)
     * @method Show\Field|Collection username(string $label = null)
     * @method Show\Field|Collection password(string $label = null)
     * @method Show\Field|Collection avatar(string $label = null)
     * @method Show\Field|Collection remember_token(string $label = null)
     * @method Show\Field|Collection phone(string $label = null)
     * @method Show\Field|Collection money(string $label = null)
     * @method Show\Field|Collection status(string $label = null)
     * @method Show\Field|Collection land_area(string $label = null)
     * @method Show\Field|Collection usable_area(string $label = null)
     * @method Show\Field|Collection horizontal(string $label = null)
     * @method Show\Field|Collection longs(string $label = null)
     * @method Show\Field|Collection price(string $label = null)
     * @method Show\Field|Collection number_of_bedrooms(string $label = null)
     * @method Show\Field|Collection number_of_restrooms(string $label = null)
     * @method Show\Field|Collection legal_documents(string $label = null)
     * @method Show\Field|Collection main_door_direction(string $label = null)
     * @method Show\Field|Collection balcony_direction(string $label = null)
     * @method Show\Field|Collection Interior_condition(string $label = null)
     * @method Show\Field|Collection highlights(string $label = null)
     * @method Show\Field|Collection post_id(string $label = null)
     * @method Show\Field|Collection district_id(string $label = null)
     * @method Show\Field|Collection province_id(string $label = null)
     * @method Show\Field|Collection uuid(string $label = null)
     * @method Show\Field|Collection connection(string $label = null)
     * @method Show\Field|Collection queue(string $label = null)
     * @method Show\Field|Collection payload(string $label = null)
     * @method Show\Field|Collection exception(string $label = null)
     * @method Show\Field|Collection failed_at(string $label = null)
     * @method Show\Field|Collection bank_id(string $label = null)
     * @method Show\Field|Collection banker(string $label = null)
     * @method Show\Field|Collection bank_name(string $label = null)
     * @method Show\Field|Collection category(string $label = null)
     * @method Show\Field|Collection province(string $label = null)
     * @method Show\Field|Collection district(string $label = null)
     * @method Show\Field|Collection ward(string $label = null)
     * @method Show\Field|Collection id_projectbds(string $label = null)
     * @method Show\Field|Collection address(string $label = null)
     * @method Show\Field|Collection status_address(string $label = null)
     * @method Show\Field|Collection floors_number(string $label = null)
     * @method Show\Field|Collection email(string $label = null)
     * @method Show\Field|Collection token(string $label = null)
     * @method Show\Field|Collection body(string $label = null)
     * @method Show\Field|Collection time_end(string $label = null)
     * @method Show\Field|Collection status_payment(string $label = null)
     * @method Show\Field|Collection image(string $label = null)
     * @method Show\Field|Collection deleted_at(string $label = null)
     * @method Show\Field|Collection id_province(string $label = null)
     * @method Show\Field|Collection id_district(string $label = null)
     * @method Show\Field|Collection id_ward(string $label = null)
     * @method Show\Field|Collection task_id(string $label = null)
     * @method Show\Field|Collection duration(string $label = null)
     * @method Show\Field|Collection content(string $label = null)
     * @method Show\Field|Collection command(string $label = null)
     * @method Show\Field|Collection parameters(string $label = null)
     * @method Show\Field|Collection expression(string $label = null)
     * @method Show\Field|Collection dont_overlap(string $label = null)
     * @method Show\Field|Collection run_in_maintenance(string $label = null)
     * @method Show\Field|Collection notification_email_address(string $label = null)
     * @method Show\Field|Collection email_verified_at(string $label = null)
     * @method Show\Field|Collection wards_id(string $label = null)
     */
    class Show {}

    /**
     
     */
    class Form {}

}

namespace Dcat\Admin\Grid {
    /**
     
     */
    class Column {}

    /**
     
     */
    class Filter {}
}

namespace Dcat\Admin\Show {
    /**
     
     */
    class Field {}
}
