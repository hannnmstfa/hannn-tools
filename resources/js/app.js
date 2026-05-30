import './bootstrap';
import 'flowbite';
import { Livewire } from '../../vendor/livewire/livewire/dist/livewire.esm';
import * as FilePond from 'filepond';
import FilePondPluginImagePreview from 'filepond-plugin-image-preview';
import 'filepond/dist/filepond.min.css';
import 'filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css'

window.FilePond = FilePond;
FilePond.registerPlugin(FilePondPluginImagePreview);
Livewire.start();

const themeModes = ['system', 'light', 'dark'];
const themeModeLabels = {
    system: 'Sistem',
    light: 'Terang',
    dark: 'Gelap',
};
const themeModeIcons = {
    system: '<svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="3" y="5" width="18" height="12" rx="2" /><path d="M8 21h8" /><path d="M12 17v4" /></svg>',
    light: '<svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2m0 14v2m9-9h-2M5 12H3m15.364-6.364l-1.414 1.414M7.05 16.95l-1.414 1.414m0-11.314l1.414 1.414M18.364 17.657l1.414 1.414M12 8a4 4 0 100 8 4 4 0 000-8z" /></svg>',
    dark: '<svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M21 12.79A9 9 0 1111.21 3a7 7 0 109.79 9.79z" /></svg>',
};

function updateTheme(mode) {
    const useDark = mode === 'dark' || (mode === 'system' && window.matchMedia('(prefers-color-scheme: dark)').matches);
    document.documentElement.classList.toggle('dark', useDark);
}

function updateThemeDropdowns(mode) {
    document.querySelectorAll('.theme-dropdown').forEach((dropdown) => {
        const button = dropdown.querySelector('.theme-dropdown-button');
        const icon = dropdown.querySelector('.theme-mode-icon');
        const label = dropdown.querySelector('.theme-mode-label');

        if (button) {
            button.dataset.themeMode = mode;
            button.setAttribute('aria-expanded', 'false');
        }

        if (icon) {
            icon.innerHTML = themeModeIcons[mode] || themeModeIcons.system;
        }

        if (label) {
            label.textContent = themeModeLabels[mode] || themeModeLabels.system;
        }

        dropdown.querySelectorAll('.theme-dropdown-item').forEach((item) => {
            item.classList.toggle('bg-gray-100', item.dataset.themeMode === mode);
            item.classList.toggle('dark:bg-gray-800', item.dataset.themeMode === mode);
        });

        const menu = dropdown.querySelector('.theme-dropdown-menu');
        if (menu) {
            menu.classList.add('hidden');
        }
    });
}

function setThemeMode(mode) {
    localStorage.setItem('color-theme', mode);
    updateTheme(mode);
    updateThemeDropdowns(mode);
}

function closeThemeDropdowns() {
    document.querySelectorAll('.theme-dropdown-menu').forEach((menu) => {
        menu.classList.add('hidden');
    });
    document.querySelectorAll('.theme-dropdown-button').forEach((button) => {
        button.setAttribute('aria-expanded', 'false');
    });
}

function initThemeSwitcher() {
    const dropdowns = document.querySelectorAll('.theme-dropdown');
    if (!dropdowns.length) {
        return;
    }

    const storedMode = localStorage.getItem('color-theme') || 'system';
    const value = themeModes.includes(storedMode) ? storedMode : 'system';
    updateThemeDropdowns(value);

    dropdowns.forEach((dropdown) => {
        const button = dropdown.querySelector('.theme-dropdown-button');
        const menu = dropdown.querySelector('.theme-dropdown-menu');

        if (!button || !menu) {
            return;
        }

        button.addEventListener('click', (event) => {
            event.stopPropagation();
            const isExpanded = button.getAttribute('aria-expanded') === 'true';
            closeThemeDropdowns();
            if (!isExpanded) {
                button.setAttribute('aria-expanded', 'true');
                menu.classList.remove('hidden');
            }
        });

        menu.querySelectorAll('.theme-dropdown-item').forEach((item) => {
            item.addEventListener('click', (event) => {
                event.preventDefault();
                const mode = item.dataset.themeMode || 'system';
                setThemeMode(mode);
                closeThemeDropdowns();
            });
        });
    });

    document.addEventListener('click', closeThemeDropdowns);

    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
        const currentMode = localStorage.getItem('color-theme') || 'system';
        if (currentMode === 'system') {
            updateTheme('system');
            updateThemeDropdowns('system');
        }
    });
}

// Button Loading
window.addEventListener("DOMContentLoaded", function () {
    initThemeSwitcher();
    document.querySelectorAll("form").forEach(form => {
        form.addEventListener("submit", function (event) {
            let submitButton = form.querySelector('button[type="submit"]');

            if (submitButton) {
                let spinner = document.createElement("span");
                spinner.innerHTML = /*html*/ `
                <svg class="animate-spin h-5 w-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path class="opacity-75" d="M4 12a8 8 0 018-8" stroke="currentColor" stroke-width="4" stroke-linecap="round"></path>
                </svg>`;

                submitButton.classList.add('flex', 'justify-center', 'items-center', 'gap-1');

                submitButton.textContent = '';
                // submitButton.classList.add('w-auto');
                submitButton.appendChild(spinner);
                submitButton.disabled = true;
            }
        });
    });
});
