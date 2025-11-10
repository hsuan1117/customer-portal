<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Issue extends Model
{
    /** @use HasFactory<\Database\Factories\IssueFactory> */
    use HasFactory;

    // 允許批量賦值的欄位
    protected $fillable = [
        'title',
        'description',
        'status',
        'priority',
        'category',
        'user_id',
        'due_date',
    ];

    /**
     * Issue 狀態可用值
     */
    public const STATUS_OPEN = 'open';
    public const STATUS_IN_PROGRESS = 'in_progress';
    public const STATUS_CLOSED = 'closed';

    public static array $statusValues = [
        self::STATUS_OPEN,
        self::STATUS_IN_PROGRESS,
        self::STATUS_CLOSED,
    ];

    // 與 User 的關聯
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
