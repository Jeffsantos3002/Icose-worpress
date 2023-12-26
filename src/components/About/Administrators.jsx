import MemberCard from "./MemberCard";
import React, { useEffect, useState } from 'react';
import axios from 'axios';

function AdministratorsList () {
    const [membros, setMembros] = useState([]);
    useEffect(() => {
        const fetchData = async () => {
          try {
            const url = `${import.meta.env.VITE_REACT_APP_API_ROOT}/membros`;
            const response = await axios.get(url);
            const membrosFiltrados = response.data.filter((post) => post.categoria.includes(2)); // categoria 2 == administrativo
            setMembros(membrosFiltrados);
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

export default AdministratorsList;
