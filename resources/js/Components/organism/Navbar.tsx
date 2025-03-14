import React from 'react'
import NavLink from '../atoms/NavLink';

// interface Props {

// }

function Navbar() {
    return (
        <>
            <nav className='bg-slate-200 px-10 py-3 flex justify-between'>
                <div>
                    <NavLink href='/'>Library</NavLink>
                </div>
                <div>
                    <NavLink href='/home'>Home</NavLink>
                    <NavLink href='/books'>Books</NavLink>
                    <NavLink href='/news'>News</NavLink>
                    <NavLink href='/article'>Articles</NavLink>
                </div>
            </nav>
        </>
    );
}

export default Navbar;
