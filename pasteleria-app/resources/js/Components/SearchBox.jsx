import React from "react";
import TextInput from "./TextInput";
import "@fortawesome/fontawesome-free/css/all.min.css";
export default function SearchBox({
    className,
    type = "text",
    maxlength = "35",
    placeholder = "Buscar",
    ...props
}) {
    return (
        <div className={"flex items-center justify-end"}>
            <div className="relative">
                <i className="fa-solid fa-magnifying-glass absolute left-0 absolute left-0 transform -translate-y-1/2"></i>
            </div>

            <input
                className={"pl-6 w-1/4 bg-transparent border-none outline-none"}
                type={type}
                maxlength={maxlength}
                placeholder={placeholder}
            ></input>
        </div>
    );
}
