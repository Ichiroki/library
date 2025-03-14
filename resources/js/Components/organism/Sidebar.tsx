import React, { useState } from "react";
import { Menu, X } from "lucide-react"; // Icon hamburger dan close dari lucide-react
import NavLink from "../atoms/NavLink";

export const Sidebar: React.FC = () => {
  const [isOpen, setIsOpen] = useState(false);

  return (
    <div className="flex fixed top-0 left-0 right-0 w-full bg-slate-200 justify-between px-10 h-12 z-50">
        <NavLink href="/">Library</NavLink>
        <nav className="hidden md:block">
        <ul className="flex">
            <li className="p-4 text-gray-500 text-sm hover:text-gray-700 cursor-pointer">Home</li>
            <li className="p-4 text-gray-500 text-sm hover:text-gray-700 cursor-pointer">Book</li>
            <li className="p-4 text-gray-500 text-sm hover:text-gray-700 cursor-pointer">News</li>
            <li className="p-4 text-gray-500 text-sm hover:text-gray-700 cursor-pointer">Articles</li>
            <li className="p-4 text-gray-500 text-sm hover:text-gray-700 cursor-pointer">Contact</li>
            <li className="p-4 text-gray-500 text-sm hover:text-gray-700 cursor-pointer">Login</li>
            </ul>
        </nav>
      {/* Tombol Hamburger (Hanya di Mobile) */}
      <button
        className="top-4 left-4 p-2 text-gray-500 rounded-md md:hidden"
        onClick={() => setIsOpen(true)}
      >
        <Menu size={24} />
      </button>

      {/* Overlay untuk Mobile */}
      {isOpen && (
        <div
          className="fixed inset-0 bg-black bg-opacity-50 z-40 md:hidden"
          onClick={() => setIsOpen(false)}
        />
      )}

      {/* Sidebar */}
      <div
        className={`fixed top-0 left-0 h-full z-50 bg-gray-100 text-gray-500 shadow-lg transition-transform duration-300 ease-in-out
        ${isOpen ? "translate-x-0" : "-translate-x-full"}
        md:translate-x-0 w-8/12 md:hidden`}
      >
        {/* Header Sidebar */}
        <div className="p-4 flex justify-between items-center">
          <h2 className="text-lg font-bold">Menu</h2>
          <button className="md:hidden" onClick={() => setIsOpen(false)}>
            <X size={24} />
          </button>
        </div>

        {/* Menu Sidebar */}
        <nav className="mt-4">
          <ul>
            <li className="p-4 text-gray-500 hover:text-gray-200 hover:bg-gray-600 transition-all cursor-pointer">Home</li>
            <li className="p-4 text-gray-500 hover:text-gray-200 hover:bg-gray-600 transition-all cursor-pointer">Book</li>
            <li className="p-4 text-gray-500 hover:text-gray-200 hover:bg-gray-600 transition-all cursor-pointer">News</li>
            <li className="p-4 text-gray-500 hover:text-gray-200 hover:bg-gray-600 transition-all cursor-pointer">Articles</li>
            <li className="p-4 text-gray-500 hover:text-gray-200 hover:bg-gray-600 transition-all cursor-pointer">Contact</li>
            <li className="p-4 text-gray-500 hover:text-gray-200 hover:bg-gray-600 transition-all cursor-pointer">Login</li>
          </ul>
        </nav>
      </div>
    </div>
  );
};
