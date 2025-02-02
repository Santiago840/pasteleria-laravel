export default function Checkbox({ className = '', ...props }) {
    return (
        <input
            {...props}
            type="checkbox"
            className={
                'border-black text-black focus:ring-black' +
                className
            }
        />
    );
}
