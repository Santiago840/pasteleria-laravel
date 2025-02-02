export default function PrimaryButton({
    className = "",
    disabled,
    children,
    ...props
}) {
    return (
        <button
            {...props}
            className={
                `inline-flex items-center border border-transparent bg-black px-4 py-2 text-xs font-semibold uppercase tracking-widest text-white transition duration-150 ease-in-out hover:bg-white hover:text-black hover:border-black focus:bg-black focus:text-white focus:outline-none  active:bg-black ${
                    disabled && "opacity-25"
                } ` + className
            }
            disabled={disabled}
        >
            {children}
        </button>
    );
}
