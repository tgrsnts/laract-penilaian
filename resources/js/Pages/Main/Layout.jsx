import React from 'react';
import '../../../css/style.css';
import headerImage from '../../../src/images/header.jpg';
import { Link, usePage } from '@inertiajs/inertia-react';
import { Inertia } from '@inertiajs/inertia';

const Layout = ({ auth, children }) => {
    const { user } = usePage().props.auth;
    const handleLogout = () => {
    Inertia.post("/logout", {         
        });        
    }
    return (
        <div>
            {/* Header */}
            <div className='header'>
                <img src={headerImage} />
            </div>

            {/* Menu  */}
            <div className="menu">
                <b>
                    <a href="/home">Home</a>
                    {user?.role == 'admin' ? (
                        <div>
                            <a href="/guru">GURU</a>
                            <a href="/jurusan">JURUSAN</a>
                            <a href="/kelas">KELAS</a>
                            <a href="/siswa">SISWA</a>
                            <a href="/mapel">MAPEL</a>
                            <a href="/mengajar">MENGAJAR</a>
                        </div>
                    ) : (
                        <a href="/nilai">NILAI</a>
                    )}
                    <a onClick={()=>handleLogout()}>LOGOUT</a>                
                </b>
            </div>

            {/* CONTENT */}
            <div className="content">{children}</div>

            {/* FOOTER */}
            <div className='footer'>
                <b>
                    <p className="mar">2023 - UJIKOM & LSP</p>
                </b>
            </div>

        </div>
    )
}

export default Layout