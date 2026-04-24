/**
 * MichaelOrenda UI - Alpine Components
 * -----------------------------------
 * Generic UI behaviors (no styling assumptions)
 */

document.addEventListener('alpine:init', () => {

    /**
     * DROPDOWN
     * -----------------------------------
     * Usage:
     * <div x-data="dropdown">
     *   <button @click="toggle">Toggle</button>
     *   <div x-show="open" @click.outside="close">...</div>
     * </div>
     */
    Alpine.data('dropdown', () => ({
        open: false,

        toggle() {
            this.open = !this.open;
        },

        openDropdown() {
            this.open = true;
        },

        close() {
            this.open = false;
        }
    }));


    /**
     * DATATABLE (Selection handling)
     * -----------------------------------
     * Usage:
     * <div x-data="datatable">
     *   <input type="checkbox" @click="toggle(1)">
     * </div>
     */
    Alpine.data('datatable', () => ({
        selected: [],

        toggle(id) {
            if (this.selected.includes(id)) {
                this.selected = this.selected.filter(i => i !== id);
            } else {
                this.selected.push(id);
            }
        },

        isSelected(id) {
            return this.selected.includes(id);
        },

        clear() {
            this.selected = [];
        }
    }));


    /**
     * MODAL
     * -----------------------------------
     */
    Alpine.data('modal', () => ({
        open: false,

        show() {
            this.open = true;
        },

        hide() {
            this.open = false;
        },

        toggle() {
            this.open = !this.open;
        }
    }));


    /**
     * TABS
     * -----------------------------------
     */
    Alpine.data('tabs', (initial = null) => ({
        active: initial,

        set(tab) {
            this.active = tab;
        },

        is(tab) {
            return this.active === tab;
        }
    }));


    /**
     * ACCORDION
     * -----------------------------------
     */
    Alpine.data('accordion', () => ({
        open: null,

        toggle(id) {
            this.open = this.open === id ? null : id;
        },

        isOpen(id) {
            return this.open === id;
        }
    }));


    /**
     * TOGGLE (Switch)
     * -----------------------------------
     */
    Alpine.data('toggle', (initial = false) => ({
        state: initial,

        toggle() {
            this.state = !this.state;
        },

        on() {
            this.state = true;
        },

        off() {
            this.state = false;
        }
    }));

});