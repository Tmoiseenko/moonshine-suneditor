document.addEventListener('alpine:init', () => {
    Alpine.data('suneditor', (attachmentRoute) => ({
        init() {
            const editorId = this.$id('suneditor');
            const el = this.$el
            const editor = SUNEDITOR.create(el, {
                height: 300,
                width: '100%',
                katex: katex,
                buttonList: [
                    ['undo', 'redo'],
                    ['paragraphStyle', 'blockquote'],
                    ['bold', 'underline', 'italic', 'strike', 'subscript', 'superscript'],
                    ['removeFormat'],
                    ['outdent', 'indent'],
                    ['align', 'list'],
                    ['table', 'link', 'image'],
                    ['math']
                ],
                lang: SUNEDITOR_LANG['ru']
            })
            console.log()
            editor.onChange = function (contents) {
                el.value = contents
            }
        },
    }))
})
