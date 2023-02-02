import React from "react";
import Layout from "../Main/Layout";
import { useForm, Link } from "@inertiajs/inertia-react";
const Create = () => {
    const { data, setData, errors, post } = useForm({
        nip: "",
        nama_guru: "",
        nama_guru: "",
        jk: "",
        alamat: "",
        password: ""
    });

    function handleSubmit(e) {
        e.preventDefault();
        post(route("guru.store"));
    }
    return (
        <div>
            <Layout>                             
                <h2 align="center">TAMBAH DATA GURU</h2>
                
                <form action="/guru" method="POST" onSubmit={handleSubmit}>
                    <table align="center">
                        <thead></thead>
                        <tbody>
                            <tr>
                            <Link href="/guru" className="button-primary">Kembali</Link>
                            </tr>
                            <tr>
                                <td><label htmlFor="nip">NIP</label></td>
                                <td>
                                    <input type="number" id="nip" name="nip" onChange={(e) => setData("nip", e.target.value)} />
                                    <p>{errors.nip}</p>
                                </td>
                            </tr>
                            <tr>
                                <td><label htmlFor="nama_guru">NAMA GURU</label></td>
                                <td>
                                    <input type="number" id="nama_guru" name="nama_guru" onChange={(e) => setData("nama_guru", e.target.value)} />
                                    <p>{errors.nama_guru}</p>
                                </td>
                            </tr>
                            <tr>
                                <td><label htmlFor="jk">JENIS KELAMIN</label></td>
                                <td>
                                    <input type="radio" name="jk" value="L" onChange={(e) => setData("jk", e.target.value)} />Laki-laki
                                    <input type="radio" name="jk" value="P" onChange={(e) => setData("jk", e.target.value)} />Perempuan
                                    <p>{errors.jk}</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label htmlFor="alamat">ALAMAT</label>
                                </td>
                                <td>
                                    <input type="text" id="alamat" name="alamat" onChange={(e) => setData("alamat", e.target.value)} />
                                    <p>{errors.alamat}</p>
                                </td>
                            </tr>
                            <tr>
                                <td><label htmlFor="password">PASSWORD</label></td>
                                <td>
                                    <input type="password" id="password" name="password" onChange={(e) => setData("password", e.target.value)} />
                                    <p>{errors.password}</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>                    
                    <center><button type="submit" className="button-primary">Simpan</button></center>

                </form>                
            </Layout>
        </div>
    )
}

export default Create