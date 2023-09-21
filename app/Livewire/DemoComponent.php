<?php

namespace App\Livewire;

use Livewire\Component;

class DemoComponent extends Component
{
    public $category = 'fruits';

    public $choice = 'apple';

    protected $food = [
        'fruits' => [
            'apple',
            'banana',
            'orange',
        ],
        'vegetables' => [
            'carrot',
            'potato',
            'tomato',
        ],
    ];

    public function render(): string
    {
        return <<<'blade'
            <div>
                <select wire:model="category">
                    @foreach(array_keys($this->food) as $value)
                        <option value="{{ $value }}">{{ ucfirst($value) }}</option>
                    @endforeach
                </select>

                <select wire:model="choice">
                    @foreach($this->food[$this->category] as $value)
                        <option value="{{ $value }}">{{ ucfirst($value) }}</option>
                    @endforeach
                </select>
            </div>
        blade;
    }
}
