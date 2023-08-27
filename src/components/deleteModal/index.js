import React from "react";
import { Button, Modal, CloseButton } from "react-bootstrap";
import closeicon from "../../assets/placeholders/closeicon.svg";
// import DeleBlueIcon from "../../../assets/images/DeleBlueIcon.svg";
// import './style.scss';

const Delete = ({
  showDel,
  DelItem,
  DelClose,
  title,
}) => {
console.log('showDel',showDel) 
 return (
    <>
      <Modal show={showDel} onHide={DelClose} className="AddteamPopup">
        <Modal.Header>
          <span className="ModalLogo">
            {/* <img src={DeleBlueIcon} /> */}
          </span>
          <Modal.Title>{title}</Modal.Title>
          <CloseButton className="closebuttonbtn" onClick={DelClose}>
            <img src={closeicon} />
          </CloseButton>
        </Modal.Header>
        <Modal.Footer className="justify-content-center">
          <Button variant="secondary" onClick={DelClose}>
            cancel
          </Button>
          <Button variant="primary" onClick={DelItem}>
            Delete
          </Button>
        </Modal.Footer>
      </Modal>
    </>
  );
};
export default Delete;
