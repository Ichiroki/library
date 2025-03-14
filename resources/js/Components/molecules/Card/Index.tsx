import React, { ReactNode } from 'react'
import { CardProvider, useCardContext } from './CardContext'

interface CardProps {
    image?: string
    children: ReactNode
}

interface CardComponent extends React.FC<CardProps> {
    Image: React.FC
    Header: React.FC<{children: ReactNode}>
    Body: React.FC<{children: ReactNode}>
    Footer: React.FC<{children: ReactNode}>
}

const Card:CardComponent = ({image, children}: CardProps) => {
    return (
        <CardProvider image={image}>
            <div className='card-container rounded-md px-4 flex flex-col md:flex-row'>{children}</div>
        </CardProvider>
    );
}

const CardImage: React.FC = () => {
    const {image} = useCardContext()
    return image ? <img src={image} alt="card" className="card-image md:w-72 lg:w-60"/> : null
}

const CardHeader: React.FC<{children: ReactNode}> = ({children}) => {
    return <div className="card-header">{children}</div>
}

const CardBody: React.FC<{children: ReactNode}> = ({children}) => {
    return <div className="card-body">{children}</div>
}

const CardFooter: React.FC<{children: ReactNode}> = ({children}) => {
    return <div className="card-footer">{children}</div>
}

Card.Image = CardImage
Card.Header = CardHeader
Card.Body = CardBody
Card.Footer = CardFooter

export default Card
