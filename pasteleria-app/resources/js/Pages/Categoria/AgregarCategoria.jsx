import React from "react";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import InputLabel from "@/Components/InputLabel";
import TextInput from "@/Components/TextInput";
import PrimaryButton from "@/Components/PrimaryButton";
import { useForm } from "@inertiajs/react";

export default function AgregarCategoria() {
    const{data, post, processing} = useForm({
        nombre: '',
    });

    function submit(e){
        e.preventDefault()
        post('/agregarCategoria')
    }

    return (
        <form onSubmit={submit}>
            <div>
                <InputLabel value={"Nombre"} labelFor="nombre" />
                <TextInput type={"text"} name="nombre" value={data.nombre} onChange= {e => setData('nombre', e.target.value)} />
            </div>
            <div>
                <PrimaryButton disabled={processing}>Agregar</PrimaryButton>
            </div>
        </form>
    );
}
