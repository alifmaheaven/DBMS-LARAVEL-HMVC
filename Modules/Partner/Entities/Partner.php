<?php

namespace Modules\Partner\Entities;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $table='res_partner';
    // protected $primaryKey='id';
     protected $fillable = ['id', 'name', 'company_id', 
                            'display_name', 'date', 'title', 
                            'parent_id', 'ref', 'lang', 
                            'tz', 'user_id', 'vat', 
                            'website', 'comment', 'credit_limit', 
                            'barcode', 'active', 'customer', 
                            'supplier', 'employee', 'function', 
                            'type', 'street', 'street2', 
                            'zip', 'city', 'state_id', 
                            'country_id', 'email', 'phone', 
                            'mobile', 'is_company', 'industry_id', 
                            'color', 'partner_share', 'commercial_partner_id', 
                            'commercial_partner_country_id', 'commercial_company_name', 'company_name', 
                            'create_uid', 'create_date', 'write_uid', 
                            'write_date', 'message_bounce', 'opt_out', 
                            'activity_date_deadline', 'message_last_post', 
                            'signup_token', 'signup_type', 'signup_expiration', 
                            'calendar_last_notif_ack', 'team_id', 'debit_limit', 
                            'last_time_entries_checked', 'invoice_warn', 'invoice_warn_msg', 
                            'sale_warn', 'sale_warn_msg', 'name2', 
                            'customer_id', 'sap_customer_id', 'customer_code', 
                            'npwp', 'npwp_address1', 'npwp_address2', 'npwp_address3', 
                            'wapu_id_moved0', 'status_id', 'no_sppkp', 'tgl_sppkp', 
                            'fasilitas_perpajakan', 'contact_person_pajak', 'telp_tax', 
                            'email_tax', 'kd_trans', 'log', 'affiliation_id', 
                            'segment_industry_id', 'sub_segment_industry_id', 'picking_warn', 
                            'picking_warn_msg', 'wapu_id', 'is_channel', 
                            'street3', 'subsidiary', 'mis_customer_code', 
                            'kelurahan_id', 'kecamatan_id', 'kota_id', 'event_created', 
                            'mis_country', 'mis_city', 'mis_active', 'sap_active', 
                            'mis_supplier_code', 'customer_pic_title_moved0', 'customer_pic_function', 
                            'customer_pic_email', 'customer_pic_phone', 'customer_pic_mobile', 
                            'customer_pic_comment', 'default_child', 'customer_pic_name', 
                            'customer_pic_title', 'namename'];

     public $timestamps = false;
}

