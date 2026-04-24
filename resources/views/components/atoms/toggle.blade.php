<button
    type="button"
    x-data="toggle(false)"
    @click="toggle()"
    :aria-pressed="state.toString()"
>
    <span x-text="state ? 'On' : 'Off'"></span>
</button>