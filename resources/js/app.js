import './bootstrap';
import { Livewire, Alpine } from '../../vendor/livewire/livewire/dist/livewire.esm';
import dashboard from "./components/dashboard";

// import Alpine from 'alpinejs';

window.Alpine = Alpine;
Alpine.data('dashboard', dashboard);

Livewire.start();

import.meta.glob([
  '../assets/**',
]);
