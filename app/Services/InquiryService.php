<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;

class InquiryService
{
    protected string $path = 'inquiries.json';

    public function all(): array
    {
        if (!Storage::exists($this->path)) {
            Storage::put($this->path, json_encode([]));
        }
        return json_decode(Storage::get($this->path), true) ?? [];
    }

    public function save(array $data): void
    {
        $inquiries = $this->all();
        $inquiries[] = $data;
        Storage::put($this->path, json_encode($inquiries, JSON_PRETTY_PRINT));
    }

    public function find(string $id): ?array
    {
        return collect($this->all())->firstWhere('id', $id);
    }

    public function delete(string $id): void
    {
        $inquiries = collect($this->all())->reject(fn($i) => $i['id'] === $id)->values()->all();
        Storage::put($this->path, json_encode($inquiries, JSON_PRETTY_PRINT));
    }

    public function updateStatus(string $id, string $status): void
    {
        $inquiries = $this->all();
        foreach ($inquiries as &$inquiry) {
            if ($inquiry['id'] === $id) {
                $inquiry['status'] = $status;
                break;
            }
        }
        Storage::put($this->path, json_encode($inquiries, JSON_PRETTY_PRINT));
    }
}
