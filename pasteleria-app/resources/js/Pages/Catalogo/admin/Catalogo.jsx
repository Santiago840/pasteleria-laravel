import SearchBox from "@/Components/SearchBox";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import { Head } from "@inertiajs/react";

export default function Catalogo() {
    return (
        <AuthenticatedLayout
            header={
                <div>
                    <h2 className="font-semibold text-xl text-gray-800 leading-tight">
                        Catálogo
                    </h2>
                    <SearchBox className=''></SearchBox>
                </div>
            }
        >
            <Head title="Catálogo"></Head>
        </AuthenticatedLayout>
    );
}
