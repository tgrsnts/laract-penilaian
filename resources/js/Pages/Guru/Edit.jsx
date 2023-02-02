import React from "react";
import Layout from "../Main/Layout";
import { useForm, Link, usePage } from "@inertiajs/inertia-react";
const Edit = () => {
    const { guru } = usePage().props;
    const { data, setData, errors, put } = useForm({
        nip: guru.nip || "",
        nama_guru: guru.nama_guru ||"", 
        jk: guru.jk ||"",
        alamat: guru.alamat ||"",
        password: guru.password ||""
    });

    function handleSubmit(e) {
        e.preventDefault();
        put(route("guru.update", guru.id));
    }
    return (
        <div>
            <Layout>                             
                <h2 align="center">EDIT DATA GURU</h2>
                
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
                                    <input type="number" id="nip" name="nip" value={data.nip} onChange={(e) => setData("nip", e.target.value)}/>
                                    <p>{errors.nip}</p>
                                </td>
                            </tr>
                            <tr>
                                <td><label htmlFor="nama_guru">NAMA GURU</label></td>
                                <td>
                                    <input type="text" id="nama_guru" name="nama_guru" value={data.nama_guru} onChange={(e) => setData("nama_guru", e.target.value)} />
                                    <p>{errors.nama_guru}</p>
                                </td>
                            </tr>
                            <tr>
                                <td><label htmlFor="jk">JENIS KELAMIN</label></td>
                                <td>
                                    <input type="radio" id="jk1" name="jk" value="L" checked={data.jk == "L"} onChange={(e) => setData("jk", e.target.value)} /><label htmlFor="jk1">Laki-laki</label> <br />
                                    <input type="radio" id="jk2" name="jk" value="P" checked={data.jk == "P"} onChange={(e) => setData("jk", e.target.value)} /><label htmlFor="jk2">Perempuan</label>
                                    <p>{errors.jk}</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label htmlFor="alamat">ALAMAT</label>
                                </td>
                                <td>
                                    <input type="text" id="alamat" name="alamat" value={data.alamat} onChange={(e) => setData("alamat", e.target.value)} />
                                    <p>{errors.alamat}</p>
                                </td>
                            </tr>
                            <tr>
                                <td><label htmlFor="password">PASSWORD</label></td>
                                <td>
                                    <input type="password" id="password" name="password" value={data.password} onChange={(e) => setData("password", e.target.value)} />
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

export default Edit