import React from "react";
import { Link } from "@inertiajs/inertia-react";
import { Button } from "react-bootstrap";
import Layout from "../Main/Layout";

const Index = (data) => { 
    const {gurus} = data;
    return (
        <div>
            <Layout>
                <center>
                    <h2>LIST DATA GURU</h2>
                    <Link href="/guru/create" className="button-primary">Tambah Data</Link>

                    <table cellPadding="10">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>NIP</th>
                        <th>NAMA GURU</th>
                        <th>JENIS KELAMIN</th>
                        <th>ALAMAT</th>
                        <th>PASSWORD</th>
                        <th>ACTION</th>
                    </tr>                    
                </thead>
                <tbody>
                        {gurus.map((guru, index) => (
                        <tr key={index}>
                            <td>{index+1}</td>
                            <td>{ guru.nip }</td>
                            <td>{ guru.nama_guru }</td>
                            <td>{ guru.jk }</td>
                            <td>{ guru.alamat }</td>
                            <td>{ guru.password }</td>
                            <td>                            
                                <Button className="btn-warning"><Link href={route("guru.edit", guru.id)}>Edit</Link></Button>
                                <form action={route("guru.destroy", guru.id)}>
                                    <Button type="submit" className="btn-danger">Hapus</Button>
                                </form>
                            </td>
                        </tr>                           
                        ))}
                    </tbody>
            </table>
                </center>
            </Layout>
        </div>
      )
}

export default Index