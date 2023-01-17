import React from 'react';
import '../../../css/style.css';
import headerImage from '../../../src/images/header.jpg';
import { Link, usePage } from '@inertiajs/inertia-react';
import { Inertia } from '@inertiajs/inertia';

const Layout = ({ children }) => {
    const { user } = usePage().props.auth
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
                            <a href="/guru/index">GURU</a>
                            <a href="/jurusan/index">JURUSAN</a>
                            <a href="/kelas/index">KELAS</a>
                            <a href="/siswa/index">SISWA</a>
                            <a href="/mapel/index">MAPEL</a>
                            <a href="/mengajar/index">MENGAJAR</a>
                        </div>
                    ) : (
                        <a href="/nilai/index">NILAI</a>
                    )}
                    <a href="/logout">LOGOUT</a>
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