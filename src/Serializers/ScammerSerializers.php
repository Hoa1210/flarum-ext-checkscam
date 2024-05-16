<?php

namespace Hoa1210\CheckScam\Serializers;

use Flarum\Api\Serializer\AbstractSerializer;
use Flarum\Api\Serializer\BasicUserSerializer;

class ScammerSerializers extends AbstractSerializer
{

    protected $type = 'scammers';

    /**
     * @param Scammer $scammer
     * @return array
     */
    protected function getDefaultAttributes($report)
    {
        return [
            'scammerName' => $report->scammer_name,
            'scammerPhone' => $report->scammer_phone,
            'scammerEmail' => $report->scammer_email,
            'scammerBank' => $report->scammer_bank,
            'scammerFacebook' => $report->scammer_facebook,
            'isOwner' => $report->is_owner,
            'description' => $report->description,
            'status' => $report->status,
            'createdAt' => $this->formatDate($report->created_at),
        ];
    }

    public function user($report){
        return $this->hasOne($report, BasicUserSerializer::class);
    }
}
