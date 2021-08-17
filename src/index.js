const { registerBlockType } = wp.blocks;

registerBlockType('martinesio/custom-cta-block',{
    // built in attributes
    title: 'Call to Action',
    description: 'Block to generate custom Call to Action',
    icon: 'format-image',
    category: 'media',
    // custom attributes
    attributes: {
        author: {
            type: 'string',
        },
    },
    // custom functions

    // built-in functions
    edit({ attributes, setAttributes }){
        const updateAuthor = (e)=>{
            // console.log(e.target.value)
            setAttributes({ author: e.target.value})
        }
        return (
            <div>
                <input type='text' value={attributes.author} onChange={updateAuthor} />
            </div>
        )
    },
    save({ attributes }){
        return(
            <div>
                <p>Author Name: <i>{attributes.author}</i></p>
            </div>
        )
    },
})
