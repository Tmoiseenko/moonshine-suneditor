document.addEventListener('alpine:init', () => {
    Alpine.data('suneditor', (attachmentRoute) => ({
        init() {
            const el = this.$el
            const x =
                window.innerWidth ||
                document.documentElement.clientWidth ||
                document.getElementsByTagName('body')[0].clientWidth
            const y =
                window.innerHeight ||
                document.documentElement.clientHeight ||
                document.getElementsByTagName('body')[0].clientHeight
            const editor = SUNEDITOR.create(el, {
                height: el.dataset.height ? el.dataset.height : y * 0.8,
                width: el.dataset.width ? el.dataset.width : x * 0.8,
                katex: katex,
                buttonList: el.dataset.buttonList,
                lang: SUNEDITOR_LANG[el.dataset.language]
            })
            console.log()
            editor.onChange = function (contents) {
                el.value = contents
            }
        },
    }))
})
