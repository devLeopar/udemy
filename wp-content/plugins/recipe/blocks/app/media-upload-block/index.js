import block_icons from '../icons/index';
import './editor.scss';

const { registerBlockType }         =   wp.blocks;
const { Button }                    =   wp.components;
const { __ }                        =   wp.i18n;

registerBlockType( 'udemy/media-upload', {
    title:                              __( 'Image Media Upload', 'recipe' ),
    description:                        __( 'Image Media Upload', 'recipe' ),
    category:                           'common',
    icon:                               block_icons.wapuu,
    attributes: {
        
    },
    edit: ( props ) => {
        
    },
    save: ( props ) => {
        return (
            <div>
                
            </div>
        )
    }
});