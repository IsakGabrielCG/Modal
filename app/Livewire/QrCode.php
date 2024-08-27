<?php

namespace App\Livewire;

use App\Models\Material;
use Filament\Actions\Action;
use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Actions\Contracts\HasActions;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Livewire\Component;

class QrCode extends Component implements HasForms, HasActions 
{

    use InteractsWithActions;
    use InteractsWithForms;

    public Material $post;

    public function deleteAction(): Action
    {
        return Action::make('delete')
            ->requiresConfirmation()
            ->action(fn () => $this->post->delete());
    }
    
    public function render()
    {
        return view('livewire.qr-code');
    }
}
