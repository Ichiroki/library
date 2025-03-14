import React, { createContext, ReactNode, useContext } from "react"

interface CardContextType {
    image?: string
}

const CardContext = createContext<CardContextType | undefined>(undefined)

export const useCardContext = () => {
    const context = useContext(CardContext)
    if(!context) {
        throw new Error("useCardContext must be used within a card")
    }
    return context
}

export const CardProvider: React.FC<{image?: string; children: ReactNode}> = ({image, children}) => {
    return <CardContext.Provider value={{image}}>{children}</CardContext.Provider>
}
