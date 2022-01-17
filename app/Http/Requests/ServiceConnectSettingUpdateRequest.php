<?php

namespace App\Http\Requests;

use App\Models\ServiceConnection;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Foundation\Http\FormRequest;

class ServiceConnectSettingUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return ServiceConnection::where('id', $this->route('serviceConnection')->id)
            ->whereHas('settings', function (Builder $query) {
                $query->where('id', $this->route('setting')->id);
            })->exists();
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'value' => ['required', 'string'],
        ];
    }
}
