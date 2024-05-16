<?php

namespace Hoa1210\CheckScam;

use Flarum\Database\AbstractModel;
use Flarum\Database\ScopeVisibilityTrait;
use Flarum\Extend\User;
use Flarum\Foundation\EventGeneratorTrait;
/**
 * @property int $id
 * @property string $scammer_name
 * @property string $scammer_phone
 * @property string $scammer_email
 * @property string $scammer_bank
 * @property string $scammer_facebook
 * @property string $reason
 * @property int $is_owner
 * @property string $description
 * @property int $create_by
 * @property string $status
 * @property Carbon $created_at
 * 
 * @property User $user
 */
class Scammer extends AbstractModel
{
    // See https://docs.flarum.org/extend/models.html#backend-models for more information.
    
    protected $table = 'scammers';

    public $timestamps = true;

    public function user(){
        return $this->hasOne(User::class, 'create_by');
    }
}
