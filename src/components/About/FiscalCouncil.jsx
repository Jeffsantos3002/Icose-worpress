import MemberCard from "./MemberCard";
import React, { useEffect, useState } from 'react';
import axios from 'axios';

function FiscalCouncilList () {
    const [membros, setMembros] = useState([]);
    useEffect(() => {
        const fetchData = async () => {
          try {
            const url = `${import.meta.env.VITE_REACT_APP_API_ROOT}/membros`;
            const response = await axios.get(url);
            const membrosFiltrados = response.data.filter((post) => post.categoria.includes(1)); // filtra por categoria (1 == fiscal )
            setMembros(membrosFiltrados);
            console.log(response)
          } catch (error) {
            console.error('Erro ao buscar membros:', error);
          }
        };
    
        fetchData();
      }, []);
   
    return (
        membros.map((e, index) => (
          <MemberCard
            key={index}
            name={e.titulo}
            text={e.conteudo}
          />
        ))
    
    );
  };

export default FiscalCouncilList;
