<?php

namespace App\Exports;

use App\Models\Vendor;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class VendorExport implements FromCollection, WithHeadings
{

    public function headings(): array
    {
        return [
            "id", "user_id", "type_id", "city_id", "business_name", "slug", "business_address", "image",
            "wedding_covered", "travel_to_other_cities", "price", "label", "website_link", "facebook_link",
            "instagram_link", "safety_assured", "flexi_sure_policy", "video_meetings", "most_popular",
            "is_featured", "status", "created_by", "updated_by", "deleted_by", "deleted_at", "created_at",
            "updated_at"
        ];
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Vendor::all();
    }
}
