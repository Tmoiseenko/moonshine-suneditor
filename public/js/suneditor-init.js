document.addEventListener('alpine:init', () => {
    Alpine.data('suneditor', (attachmentRoute) => ({
        init() {
            console.log('suneditor init')
            const editor = SUNEDITOR.create(this.$el,{
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
            },
    }))
})
