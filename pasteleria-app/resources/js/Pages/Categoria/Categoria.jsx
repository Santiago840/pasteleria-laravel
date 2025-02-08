import React from "react";
import PrimaryButton from "@/Components/PrimaryButton";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import AgregarCategoria from "./AgregarCategoria";
import { Head } from "@inertiajs/react";
import { Link } from "@inertiajs/react";

export default function Categoria() {
    return (
        <AuthenticatedLayout
            header={
                <div>
                    <h2>Categorías</h2>
                    <PrimaryButton>
                        Agregar
                    </PrimaryButton>
                </div>
            }
        >
            <Head title="Categoría"></Head>
            <div>
                <AgregarCategoria></AgregarCategoria>
            </div>
        </AuthenticatedLayout>
    );
}
